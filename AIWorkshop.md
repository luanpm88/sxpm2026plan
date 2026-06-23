# AI Workshop Handbook (From Slides 31-39)

## 1. Document Purpose
This document converts slides 31-39 into a shareable, non-presentation handbook.

Use this file when you need to:
- Share workshop content in chat, email, or docs.
- Run the same workshop again with another team.
- Regenerate slides later without losing intent.
- Keep a single source of truth for AI coding workshop practices.

## 2. Workshop Overview
Title: Embracing AI, the Emotsy Way

Subtitle: Design-first AI coding workshop for Latvia and Vietnam teams

Core mindset:
- AI is an implementation engine.
- Humans stay in control of system intent.
- Design artifacts come first; AI implementation comes second.

Session format:
- Internal training workshop
- 20-minute presentation + hands-on segment
- Focus on architecture safety, not prompt tricks

Primary goal:
- Strengthen design thinking
- Keep architectural control
- Improve code quality while increasing delivery speed

## 3. Agenda (Narrative Version)
1. Why AI now in development:
- Where AI helps and where teams lose control.

2. Design-first guardrails:
- Interfaces, diagrams, and tests as contracts.

3. Workshop use case:
- Add a new email verification provider (Reoon) into an existing architecture.

4. Practical flow:
- Design artifacts -> AI implementation -> verification.

5. Team principles:
- Feature work should strengthen architecture, not degrade it.

## 4. AI in Development: Benefits and Risks
### 4.1 What AI helps us do
- Accelerate routine implementation.
- Reduce boilerplate and repetitive integration work.
- Explore alternatives faster before choosing a final design.
- Let developers focus more on architecture and decision quality.

### 4.2 Where teams lose control
- AI-generated code bypasses intended design.
- Hidden coupling and fragile behavior enter core modules.
- Interface inconsistency increases regression risk.
- Teams stop reasoning deeply about architecture.

Guardrail statement:
- AI can write code. Humans must define intent and constraints.

## 5. Design-First Control Loop
This workshop uses a 4-step loop:

1. Define interfaces
- Lock contracts and method signatures first.
- VerifyInterface for single checks.
- BulkVerifyInterface for bulk flow.

2. Model interactions
- Define single and bulk sequences before coding.
- Keep callback behavior explicit and deterministic.

3. Write tests
- Encode status mapping and callback behavior in tests.
- Keep tests focused and fast.

4. Ask AI to implement
- Limit AI scope to the provider layer.
- No core module redesign.

Design principles reinforced:
- Human role is design, decision, and review.
- Compliance over creativity in core systems.
- Good design turns AI into a safe accelerator.

## 6. Workshop Use Case: Reoon Provider Integration
Scenario:
- Add one new provider class for Reoon.
- Conform to existing contracts.
- Keep current architecture stable.

Must support:
- Single: `verify($email)`
- Bulk submit: `bulkSubmit(Builder $subscriberQuery)`
- Bulk polling: `bulkCheck(string $token, Closure $doneCallback, Closure $waitCallback)`

Constraints:
- No core module changes.
- No architecture redesign.
- AI follows interface contract and tests.
- Keep implementation small and maintainable.

## 7. Architecture Snapshot (Concept)
Two interface roles:
- VerifyInterface: single email verification.
- BulkVerifyInterface: bulk list verification.

Common provider pattern:
- Existing providers (for example Emailable, Bouncify, MyEmailVerifier) already follow contract-based integration.
- Reoon should follow the same pattern.

Design rule:
- Same interfaces, same flow, new provider only.

## 8. Prompting With Constraints
### 8.1 Strong prompt pattern
A good prompt includes:
- Explicit interfaces and method signatures.
- Allowed scope and forbidden scope.
- Status mapping rules.
- Required outputs (provider class + focused tests).

### 8.2 Weak prompt pattern
Avoid vague requests like:
- "Build email verification quickly, do whatever is needed."

Why:
- Vague prompts invite architecture drift and inconsistent behavior.

## 9. Hands-On Workshop Flow and Roles
### 9.1 Suggested flow
1. Design brief (10-15 min)
2. Interaction mapping (15-20 min)
3. AI implementation (25-30 min)
4. Verification and review (15-20 min)

### 9.2 Role split
- Design Owner: owns constraints and acceptance criteria.
- AI Driver: executes implementation with constrained prompts.
- Verifier: validates behavior, tests, and quality.

## 10. Principles and Takeaways
What to reinforce:
- Human-led design is non-negotiable.
- AI is a tool, not a decision maker.
- Contracts and flow consistency matter more than clever code.

What teams gain:
- Faster provider integration without architecture drift.
- Higher confidence in changes.
- Cleaner maintenance path.
- Better cross-role collaboration.

Key takeaway sentence:
- One new provider class, same interfaces, same flow: fast delivery with AI and stable architecture.

## 11. Practical Playbook (Operational Steps)
This section is the reusable implementation runbook.

### Step 1: Generate design contract markdown
Goal:
- Create a contract file before writing code.

Expected output:
- `verification-design-contract.md` including:
  - Method contracts
  - Status map conventions
  - Single and bulk flow definitions
  - Error-handling conventions
  - Minimal integration rules

### Step 2: Register provider in config
Goal:
- Make Reoon appear in service registry.

Expected change:
- Add one service block in `config/verification.php`.

### Step 3: Implement provider class with AI
Goal:
- Implement Reoon provider class conforming to both interfaces.

Hard constraints:
- No core workflow changes.
- Explicit status mapping.
- Clear exception handling.

### Step 4: Create and run focused tests
Goal:
- Validate mapping, callback behavior, and metadata methods.

Testing approach:
- Mock external API responses.
- No real network calls.

### Step 5: Run final AI debug/finalization pass
Goal:
- Fix failing tests and edge cases.
- Improve defensive checks and exception quality.
- Return concise changelog + validation checklist.

### Step 6: Validate in application UI
Goal:
- Confirm service can be added and used in real app flow.
- Verify platform-wide usability without extra core changes.

## 12. Reusable Prompt Templates
You can copy these templates for future workshops.

### 12.1 Contract-first prompt template
```text
Read current verification architecture and produce a markdown design contract.
Do not implement code yet.
Include method contracts, status map, callback flow, error conventions, and no-core-change rules.
```

### 12.2 Implementation prompt template
```text
Use the design contract as source of truth.
Implement provider class that conforms exactly to VerifyInterface and BulkVerifyInterface.
Do not modify core modules.
Keep status mapping explicit.
Add clear exceptions.
Return concise method-level changelog.
```

### 12.3 Testing prompt template
```text
Create focused unit tests for status mapping, invalid responses, bulk callback behavior, and metadata methods.
Mock external API responses.
Do not call real network.
```

### 12.4 Finalize prompt template
```text
Review contract, config, provider class, and tests.
Fix failing tests and edge cases.
Ensure no interface violation.
Keep scope minimal.
Return final checklist and rerun commands.
```

## 13. Acceptance Checklist
A workshop run is considered complete when:
- Reoon config entry exists and is unique.
- Provider class conforms to both interfaces.
- Status mapping and callback tests pass.
- No core module changes outside integration scope.
- Human reviewer approves before merge.

## 14. How to Regenerate Slides Later
If you want to regenerate new slides from this document:

1. Keep this handbook as source of truth.
2. Build a new slide outline from sections 2-11.
3. Use one section per slide objective.
4. Preserve these constants:
- Design-first narrative
- Contract-first implementation flow
- Scope constraints
- Verification discipline
5. Add examples/screenshot updates without changing core principles.

Recommended slide mapping (if regenerated):
- Overview and intent
- Benefits vs risks
- Design-first control loop
- Use case and constraints
- Architecture snapshot
- Prompt quality (good vs bad)
- Roles and workshop flow
- Takeaways
- Practical playbook

## 15. One-Page Summary for Sharing
This workshop teaches teams to use AI safely in software development by keeping humans in control of architecture.

The method is simple:
- Design contracts first.
- Encode flow in interfaces and tests.
- Ask AI to implement only inside constraints.
- Verify behavior before merge.

Result:
- Faster delivery without sacrificing architecture quality.
- Repeatable integration workflow teams can reuse across providers and projects.
