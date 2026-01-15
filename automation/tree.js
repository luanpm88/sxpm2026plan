class Node {
    constructor({ id, title, description, type = "condition" }) {
        this.id = id;
        this.title = title;
        this.description = description;
        this.type = type; // condition | action | wait
        this.yes = null;
        this.no = null;
        this.next = null; // For linear flow (actions, wait events)
    }

    setYes(node) {
        this.yes = node;
    }

    setNo(node) {
        this.no = node;
    }

    setNext(node) {
        this.next = node;
    }
}

class Tree {
    constructor(root) {
        this.root = root;
        this.connections = [];
    }

    render(container) {
        container.innerHTML = "";
        this.connections = [];
        this.nodePositions = new Map(); // Store node positions
        this.builtNodeIds = new Set(); // Track which nodes have been created
        this.processedIds = new Set(); // Track traversal to avoid cycles
        this.positionedIds = new Set(); // Track positioned nodes to stop recursion loops
        
        const wrapper = document.createElement("div");
        wrapper.className = "tree-wrapper";
        
        const treeEl = document.createElement("div");
        treeEl.className = "tree";
        
        // Build all nodes flat (no nesting)
        this.buildFlatNodes(this.root, treeEl);
        
        wrapper.appendChild(treeEl);
        container.appendChild(wrapper);
        
        // Calculate layout positions after DOM is built
        requestAnimationFrame(() => {
            // First pass: calculate tree width and find leftmost position
            const tempX = 1000; // Temporary X for width calculation
            const startY = 40;
            this.positionNode(this.root, tempX, startY, treeEl);
            
            // Find the leftmost and rightmost positions
            let minX = Infinity;
            let maxX = -Infinity;
            this.nodePositions.forEach((pos) => {
                const left = pos.x - pos.width / 2;
                const right = pos.x + pos.width / 2;
                if (left < minX) minX = left;
                if (right > maxX) maxX = right;
            });
            
            // Calculate offset to shift entire tree right
            const leftPadding = 100; // Padding from left edge
            const offsetX = leftPadding - minX;
            
            // Clear and re-position with correct offset
            this.nodePositions.clear();
            this.positionedIds.clear();
            const adjustedStartX = tempX + offsetX;
            this.positionNode(this.root, adjustedStartX, startY, treeEl);
            
            // Find the maximum X and Y positions (right and bottom of tree)
            let maxY = 0;
            minX = Infinity;
            maxX = -Infinity;
            this.nodePositions.forEach((pos) => {
                const bottom = pos.y + pos.height;
                const left = pos.x - pos.width / 2;
                const right = pos.x + pos.width / 2;
                if (bottom > maxY) maxY = bottom;
                if (left < minX) minX = left;
                if (right > maxX) maxX = right;
            });
            
            // Set tree container dimensions to accommodate all nodes + padding
            const bottomPadding = 150;
            const rightPadding = 150;
            const totalHeight = maxY + bottomPadding;
            // Calculate total width: span from leftmost to rightmost + right padding
            // (left padding already included in minX positioning)
            const treeSpan = maxX - minX;
            const totalWidth = minX + treeSpan + rightPadding;
            treeEl.style.minHeight = `${totalHeight}px`;
            treeEl.style.minWidth = `${totalWidth}px`;
            wrapper.style.minHeight = `${totalHeight}px`;
            wrapper.style.minWidth = `${totalWidth}px`;
            
            // Add SVG after positioning with proper dimensions
            const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
            svg.setAttribute("class", "connections");
            svg.setAttribute("width", totalWidth);
            svg.setAttribute("height", totalHeight);
            wrapper.insertBefore(svg, treeEl);
            
            this.drawConnections(svg);
        });
    }

    buildFlatNodes(node, container) {
        if (!node) return;
        
        // If already processed, only record edges and do not recurse (prevents cycles)
        if (this.processedIds.has(node.id)) {
            if (node.next) {
                this.connections.push({ from: node.id, to: node.next.id, type: "next" });
            }
            if (node.yes) {
                this.connections.push({ from: node.id, to: node.yes.id, type: "yes", label: "YES" });
            }
            if (node.no) {
                this.connections.push({ from: node.id, to: node.no.id, type: "no", label: "NO" });
            }
            return;
        }

        // Mark this node as processed and built
        this.processedIds.add(node.id);
        this.builtNodeIds.add(node.id);
        
        // Create node wrapper
        const nodeWrapper = document.createElement("div");
        nodeWrapper.setAttribute("data-node-id", node.id);
        nodeWrapper.style.position = 'absolute';
        
        // Node UI
        const nodeEl = document.createElement("div");
        nodeEl.className = `node ${node.type}`;
        nodeEl.innerHTML = `
            <div class="node-title">${node.title}</div>
            <div class="node-desc">${node.description}</div>
        `;
        
        nodeWrapper.appendChild(nodeEl);
        container.appendChild(nodeWrapper);
        
        // Recursively build child nodes
        if (node.next) {
            this.connections.push({ from: node.id, to: node.next.id, type: "next" });
            this.buildFlatNodes(node.next, container);
        }
        if (node.yes) {
            this.connections.push({ from: node.id, to: node.yes.id, type: "yes", label: "YES" });
            this.buildFlatNodes(node.yes, container);
        }
        if (node.no) {
            this.connections.push({ from: node.id, to: node.no.id, type: "no", label: "NO" });
            this.buildFlatNodes(node.no, container);
        }
    }

    positionNode(node, x, y, container) {
        if (!node) return;
        
        const nodeWrapper = container.querySelector(`[data-node-id="${node.id}"]`);
        if (!nodeWrapper) return;
        
        const nodeEl = nodeWrapper.querySelector('.node');
        if (!nodeEl) return;
        
        // Don't reposition if already positioned (prevents cycles)
        if (this.positionedIds.has(node.id)) return;
        
        // Mark as positioned before calculating children positions
        this.positionedIds.add(node.id);
        
        // Center the node at position x, y
        const nodeWidth = 200; // Fixed width for all nodes
        const nodeHeight = nodeEl.offsetHeight;
        
        nodeWrapper.style.left = `${x - nodeWidth / 2}px`;
        nodeWrapper.style.top = `${y}px`;
        
        // Store position for connection drawing
        this.nodePositions.set(node.id, { x, y, width: nodeWidth, height: nodeHeight });
        
        const verticalGap = 80;
        const horizontalGap = 60;
        
        // Handle linear flow (next)
        if (node.next) {
            const nextY = y + nodeHeight + verticalGap;
            this.positionNode(node.next, x, nextY, container);
        }
        // Handle branching (yes/no)
        else if (node.yes || node.no) {
            const childY = y + nodeHeight + verticalGap;
            
            if (node.yes && node.no) {
                // Calculate width needed for each branch
                const yesWidth = this.calculateBranchWidth(node.yes);
                const noWidth = this.calculateBranchWidth(node.no);
                
                const totalWidth = yesWidth + noWidth + horizontalGap;
                const yesX = x - totalWidth / 2 + yesWidth / 2;
                const noX = x + totalWidth / 2 - noWidth / 2;
                
                this.positionNode(node.yes, yesX, childY, container);
                this.positionNode(node.no, noX, childY, container);
            } else if (node.yes) {
                this.positionNode(node.yes, x - horizontalGap / 2, childY, container);
            } else if (node.no) {
                this.positionNode(node.no, x + horizontalGap / 2, childY, container);
            }
        }
    }

    calculateBranchWidth(node, seen = new Set()) {
        if (!node) return 0;
        if (seen.has(node.id)) {
            // Break cycles with base width
            return 200;
        }
        seen.add(node.id);
        
        const nodeWidth = 200; // Fixed node width
        
        // If node has branches, calculate their combined width
        if (node.yes && node.no) {
            const yesWidth = this.calculateBranchWidth(node.yes, seen);
            const noWidth = this.calculateBranchWidth(node.no, seen);
            return Math.max(nodeWidth, yesWidth + noWidth + 60);
        } else if (node.yes || node.no) {
            const childWidth = this.calculateBranchWidth(node.yes || node.no, seen);
            return Math.max(nodeWidth, childWidth);
        } else if (node.next) {
            return this.calculateBranchWidth(node.next, seen);
        }
        
        return nodeWidth;
    }

    drawConnections(svg) {
        svg.innerHTML = "";
        
        // Add arrowhead markers first
        const defs = document.createElementNS("http://www.w3.org/2000/svg", "defs");
        defs.innerHTML = `
            <marker id="arrow-yes" markerWidth="6" markerHeight="6" refX="5.5" refY="2.5" orient="auto">
                <polygon points="0 0, 6 2.5, 0 5" fill="#059669" />
            </marker>
            <marker id="arrow-no" markerWidth="6" markerHeight="6" refX="5.5" refY="2.5" orient="auto">
                <polygon points="0 0, 6 2.5, 0 5" fill="#dc2626" />
            </marker>
            <marker id="arrow-next" markerWidth="6" markerHeight="6" refX="5.5" refY="2.5" orient="auto">
                <polygon points="0 0, 6 2.5, 0 5" fill="#AAAAAA" />
            </marker>
        `;
        svg.appendChild(defs);
        
        // Remove existing labels
        document.querySelectorAll('.branch-label').forEach(el => el.remove());
        
        this.connections.forEach(conn => {
            const fromEl = document.querySelector(`[data-node-id="${conn.from}"] > .node`);
            const toEl = document.querySelector(`[data-node-id="${conn.to}"] > .node`);
            
            if (!fromEl || !toEl) return;
            
            const fromRect = fromEl.getBoundingClientRect();
            const toRect = toEl.getBoundingClientRect();
            const containerRect = document.querySelector('.tree-wrapper').getBoundingClientRect();
            
            const x1 = fromRect.left + fromRect.width / 2 - containerRect.left;
            const y1 = fromRect.bottom - containerRect.top;
            const x2 = toRect.left + toRect.width / 2 - containerRect.left;
            const y2 = toRect.top - containerRect.top;
            
            const path = this.createCurvedPath(x1, y1, x2, y2, conn.type);
            
            const pathEl = document.createElementNS("http://www.w3.org/2000/svg", "path");
            pathEl.setAttribute("d", path);
            pathEl.setAttribute("class", `connection connection-${conn.type}`);
            pathEl.setAttribute("fill", "none");
            pathEl.setAttribute("stroke", conn.type === "yes" ? "#059669" : conn.type === "no" ? "#dc2626" : "#AAAAAA");
            pathEl.setAttribute("stroke-width", "2");
            pathEl.setAttribute("marker-end", `url(#arrow-${conn.type})`);
            
            svg.appendChild(pathEl);
            
            // Position label along the curve for branching
            if (conn.type === "yes" || conn.type === "no") {
                const t = conn.type === "yes" ? 0.2 : 0.3; // Separate YES and NO positions
                const labelPos = this.getPointOnCurve(x1, y1, x2, y2, conn.type, t);
                this.createLabel(conn.label, labelPos.x, labelPos.y, containerRect);
            }
        });
    }

    createCurvedPath(x1, y1, x2, y2, type) {
        const dx = x2 - x1;
        const dy = y2 - y1;
        
        // Detect backward arrow (cycle back to earlier node)
        const isBackward = dy < 0;
        
        // Control point offset for smooth curves
        const offset = Math.abs(dy) * 0.5;
        
        // For backward cycles, use wider curve to avoid overlapping nodes
        if (isBackward) {
            const sideOffset = Math.abs(dx) * 0.5 + 80; // Extra horizontal offset
            const controlX1 = x1 + (dx > 0 ? sideOffset : -sideOffset);
            const controlX2 = x2 + (dx > 0 ? sideOffset : -sideOffset);
            const controlY1 = y1 - offset;
            const controlY2 = y2 + offset;
            
            return `M ${x1} ${y1} C ${controlX1} ${controlY1}, ${controlX2} ${controlY2}, ${x2} ${y2}`;
        }
        
        // For branching, add horizontal curve
        if (type === "yes" || type === "no") {
            const controlY = y1 + offset;
            return `M ${x1} ${y1} C ${x1} ${controlY}, ${x2} ${controlY}, ${x2} ${y2}`;
        } else {
            // Linear flow - simple vertical curve
            return `M ${x1} ${y1} C ${x1} ${y1 + offset}, ${x2} ${y2 - offset}, ${x2} ${y2}`;
        }
    }

    getPointOnCurve(x1, y1, x2, y2, type, t) {
        // Calculate point on cubic Bezier curve at parameter t (0 to 1)
        const dy = y2 - y1;
        const offset = Math.abs(dy) * 0.5;
        const controlY = y1 + offset;
        
        // Cubic Bezier formula: P = (1-t)³P0 + 3(1-t)²tP1 + 3(1-t)t²P2 + t³P3
        const mt = 1 - t;
        const mt2 = mt * mt;
        const mt3 = mt2 * mt;
        const t2 = t * t;
        const t3 = t2 * t;
        
        const x = mt3 * x1 + 3 * mt2 * t * x1 + 3 * mt * t2 * x2 + t3 * x2;
        const y = mt3 * y1 + 3 * mt2 * t * controlY + 3 * mt * t2 * controlY + t3 * y2;
        
        return { x, y };
    }

    createLabel(text, x, y, containerRect) {
        const label = document.createElement("div");
        label.className = "branch-label";
        label.setAttribute("data-label", text.toLowerCase());
        label.textContent = text;
        label.style.position = "absolute";
        label.style.left = `${x}px`;
        label.style.top = `${y}px`;
        label.style.transform = "translate(-50%, -50%)";
        
        document.querySelector('.tree-wrapper').appendChild(label);
    }
}

