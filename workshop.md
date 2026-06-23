# AI Workshop Presentation Script (Slides 31–39)
Friendly internal workshop presentation for developer teams.

---

# Slide 31 — Opening & Welcome

Hi everyone.

This is actually the first time I’ve seen so many of us in one meeting.  
Usually we work with each other every day but in separate teams, so we don't often get a chance to see everyone together like this.

So it’s really nice to see you all.

And it’s been great working with you over the past year.

Today I want to share a small internal workshop about how we use AI in development.

But this workshop is not about AI hype or prompt tricks.

The main idea is simple:

AI can implement code, but humans still design and control the system.

So our goal is to use AI to move faster without losing architectural control.

---

# Slide 32 — What This Workshop Is

This is a short session.

First I will show the core ideas and principles.

Then we will look at a practical example of how AI can be used safely inside our architecture.

The goal is simple:

After this session, you should be able to apply the same approach in your daily development work.

---

# Slide 33 — Why AI in Development

AI is already changing how developers work.

There are some very clear benefits.

AI helps us:

- Write repetitive code faster
- Generate boilerplate
- Integrate APIs quickly
- Explore implementation alternatives faster

So instead of spending time on routine coding,
developers can focus more on architecture and decision quality.

---

# Slide 34 — Risks of AI in Development

But there is also a risk.

Many teams start using AI and suddenly lose architectural control.

For example:

- AI-generated code bypasses intended design
- Hidden coupling appears
- Interfaces become inconsistent
- Regression risks increase

And the biggest problem is:

Developers stop reasoning about architecture.

So the key principle for this workshop is:

AI can write code.  
Humans define intent and constraints.

---

# Slide 35 — Design-First Control Loop

So how do we keep control while using AI?

We use what we call a Design-First Control Loop.

There are four steps.

Step 1 — Define Interfaces  
Lock contracts and method signatures first.

For example:
- VerifyInterface
- BulkVerifyInterface

This defines the expected system behavior.

---

Step 2 — Model Interactions

Define the flow before coding.

Single verification flow.  
Bulk verification flow.  
Callbacks and polling behavior.

Everything should be explicit and predictable.

---

Step 3 — Write Tests

Tests encode the behavior of the system.

They define:

- Status mapping
- Expected responses
- Callback behavior

Tests protect the architecture.

---

Step 4 — Ask AI to Implement

Only after that do we ask AI to implement code.

But the scope is limited.

AI only implements the provider layer.

No core module redesign.

So the important shift is:

Humans design first.  
AI implements inside the design.

---

# Slide 36 — Workshop Use Case

Now let's look at a practical example.

In this workshop we simulate adding a new email verification provider called Reoon.

The goal is simple:

Add one new provider class  
while keeping the existing architecture stable.

---

The provider must support three operations:

Single verification

verify($email)

Bulk submit

bulkSubmit(Builder $subscriberQuery)

Bulk polling

bulkCheck(string $token, Closure $doneCallback, Closure $waitCallback)

---

But we impose strict constraints.

No core module changes.

No architecture redesign.

AI must follow the existing interface contracts and tests.

---

# Slide 37 — Architecture Snapshot

In our architecture we already have multiple providers.

Examples include:

- Emailable
- Bouncify
- MyEmailVerifier

All of them follow the same contract-based integration.

So the rule is very simple.

Same interfaces.  
Same flow.  
New provider only.

This keeps the architecture stable while allowing us to extend functionality.

---

# Slide 38 — Prompting With Constraints

This is where many teams fail when using AI.

They write weak prompts like:

"Build email verification quickly."

This gives AI too much freedom and can cause architecture drift.

---

A strong prompt includes:

- Explicit interfaces and method signatures
- Allowed scope
- Forbidden scope
- Status mapping rules
- Required outputs

This turns AI into an implementation engine rather than a system designer.

---

# Slide 39 — Workshop Roles & Key Takeaways

In the hands-on workshop we split roles across the team.

Design Owner  
Defines constraints, architecture rules, and acceptance criteria.

AI Driver  
Uses structured prompts to generate the implementation.

Verifier  
Checks behavior, tests, and code quality.

---

This mirrors real engineering workflow:

Architecture  
Implementation  
Verification

---

Key principles to remember:

Human-led design is non-negotiable.

AI is a tool, not a decision maker.

Contracts and interfaces protect architecture.

Good design turns AI into a safe accelerator.

---

Final takeaway:

One new provider class.  
Same interfaces.  
Same flow.

With AI we get faster delivery while keeping the architecture stable.

---

Next we will go through the practical workflow:

Design contract → AI implementation → tests → verification.