<?php

return [
    'badge' => 'Research Initiative',
    'title' => 'AI Knowledge Platform: A Reasoning Layer for Enterprise Systems',
    'intro' => 'The AI Knowledge Platform is Hoàng Khang Incotech\'s long-term research direction for applying AI as a controlled reasoning layer inside enterprise systems. Rather than treating AI as a standalone chatbot, we study how language models can read organizational data, understand context, retrieve reliable sources, and support decision-making with clear governance. When connected with HKSpace-style distributed architecture, this layer can help systems adapt to real operating needs without losing traceability.',

    'problem_title' => 'The Research Problem',
    'problem_desc' => 'Many organizations already have rich operational knowledge, but it is fragmented across documents, systems, teams, and informal experience. The challenge is not only storage; it is how knowledge is represented, retrieved, governed, and reused. Large language models create a new path: semantic understanding, contextual retrieval, and source-grounded reasoning over enterprise data. The research question is how to make that capability reliable enough for real business workflows.',

    'foundation_title' => 'Technical Foundation',
    'foundation_desc' => 'We\'re developing this as a research platform exploring how semantic representations can be built from enterprise data in ways that remain verifiable and grounded. The technical approach moves beyond simple retrieval patterns.',
    'foundation_semantic_title' => 'Semantic Representation Layer',
    'foundation_semantic_desc' => 'We investigate how to build high-dimensional semantic spaces where documents, queries, and concepts are represented not as strings but as positions in continuous vector space. This enables the system to reason about relationships and relevance in ways purely lexical approaches cannot capture.',
    'foundation_grounded_title' => 'Grounded Reasoning Architecture',
    'foundation_grounded_desc' => 'Rather than pure generation, our approach retrieves relevant source material and uses it as context before synthesis. This keeps the system\'s outputs anchored to organizational data, reducing hallucination and enabling verification of sources. The pattern is foundational to systems that must remain trustworthy.',
    'foundation_heterogeneous_title' => 'Heterogeneous Model Integration',
    'foundation_heterogeneous_desc' => 'We\'re exploring compositions where different language models serve different roles—some for semantic understanding, others for reasoning, others for domain-specific tasks. Intelligent routing determines which model is appropriate for each query, optimizing for both accuracy and computational efficiency.',
    'foundation_integration_title' => 'Integration with HKSpace',
    'foundation_integration_desc' => 'The AI system is designed as an intelligence layer above HKSpace\'s distributed infrastructure. It reads system state, understands data relationships, and supports optimization suggestions based on real operating context.',

    'impact_title' => 'Impact Direction',
    'impact_desc' => 'During research and early validation, we focus on measurable outcomes: answer quality, retrieval speed, source traceability, and reduced manual effort in recurring knowledge workflows.',
    'impact_items' => [
        ['text' => 'Process ', 'bold' => 'high-volume daily query throughput', 'suffix' => ' across early enterprise customers as adoption grows'],
        ['text' => 'Achieve ', 'bold' => 'high accuracy', 'suffix' => ' in domain-specific question answering through continuous model refinement'],
        ['text' => 'Optimize response behavior toward ', 'bold' => 'stable low-latency retrieval', 'suffix' => ' for multi-step enterprise queries'],
        ['text' => 'Reduce ', 'bold' => 'time spent searching and synthesizing information', 'suffix' => ' in recurring knowledge workflows'],
        ['text' => 'Build ', 'bold' => 'adaptive AI architecture', 'suffix' => ' that respects user roles, data permissions, source verification, and answer-quality controls'],
    ],

    'research_title' => 'Research Directions',
    'research_desc' => 'Our work extends beyond question-answering toward understanding how AI can serve as an active reasoning component within enterprise systems. We\'re investigating:',
    'research_items' => [
        ['bold' => 'Controlled Workflow Optimization:', 'text' => 'Systems that understand task dependencies and suggest improvements based on real operating patterns'],
        ['bold' => 'Contextual Intelligence:', 'text' => 'AI assistants that understand organizational context deeply enough to provide advice rather than mere information retrieval'],
        ['bold' => 'Predictive Analysis Integration:', 'text' => 'Combining knowledge understanding with prediction systems to anticipate issues before they manifest'],
        ['bold' => 'Cross-System Reasoning:', 'text' => 'AI that understands relationships between systems and data models to support fuller contextual analysis'],
        ['bold' => 'Verifiable Automation:', 'text' => 'Developing patterns where AI-assisted actions can be audited, understood, and corrected without re-engineering systems'],
    ],

    'closing' => 'HKSpace and the AI Knowledge Platform are complementary research directions. HKSpace provides the infrastructure and data foundation; the AI layer provides source-grounded reasoning and decision support. The question we are pursuing is what becomes possible when AI is designed as part of enterprise architecture rather than added as a disconnected feature.',

    // Sidebar
    'sidebar_title' => 'Knowledge Layer for Enterprise',
    'sidebar_desc' => 'Long-term research into AI systems that understand context, retrieve from verified sources, and support enterprise workflow optimization.',
    'sidebar_focus_title' => 'Research Focus Areas',
    'sidebar_f1_title' => 'Semantic Understanding',
    'sidebar_f1_desc' => 'Representing meaning in high-dimensional spaces. Reasoning about relationships, not keywords.',
    'sidebar_f2_title' => 'Grounded Reasoning',
    'sidebar_f2_desc' => 'Answers anchored to organizational data. Verifiable sources, reduced hallucination.',
    'sidebar_f3_title' => 'Controlled Optimization',
    'sidebar_f3_desc' => 'Systems that suggest improvements and automate tasks within defined permissions, data boundaries, and control policies.',
    'sidebar_f4_title' => 'HKSpace Integration',
    'sidebar_f4_desc' => 'Intelligent layer consuming distributed system state, reasoning across domains.',
    'sidebar_vision' => 'Enterprise systems where AI is designed as a governed architecture layer, helping software adapt while remaining traceable and controllable.',
];
