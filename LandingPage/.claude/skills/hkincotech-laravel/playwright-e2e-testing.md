---
name: playwright-e2e-testing
description: >
  Playbook for writing, running, and debugging Playwright E2E tests for the
  HKIncotech Laravel landing page. Use whenever the task involves adding new
  test cases, running the test suite, debugging failing tests, or adding
  new locale/page coverage.
---

# Playwright E2E Testing Playbook — HKIncotech

## Setup

```bash
# Tests live in:
tests/e2e/locale.spec.ts       # all locale/i18n tests (38 tests)

# Config:
playwright.config.ts            # baseURL: http://localhost:8787

# Prerequisites — server must be running:
php artisan serve --port=8787
# or
composer run dev
```

## Running tests

```bash
# All E2E tests
npx playwright test

# Specific file
npx playwright test tests/e2e/locale.spec.ts

# Specific test by name
npx playwright test -g "hero title is in Vietnamese"

# Specific describe group
npx playwright test -g "Vietnamese page"

# Debug mode (browser visible, slow)
npx playwright test --headed --slow-mo=300

# Debug single test interactively
npx playwright test --debug -g "language switcher"

# Show HTML report
npx playwright show-report
```

## Current test coverage

| Suite | Tests | Description |
|-------|-------|-------------|
| Root redirect | 3 | `/` → correct locale based on Accept-Language / cookie |
| English page | 6 | `html[lang]`, hero text, nav labels, footer, internal links |
| Vietnamese page | 6 | Same as EN but Vietnamese content |
| Language switcher | 5 | Active state, click navigation, content switches |
| Cookie persistence | 4 | Cookie set by server, persists across pages, priority over header |
| /set-locale path | 2 | Path preserved when switching locale |
| Translation completeness | 10 | Raw keys never appear in page output |
| Contact page | 2 | Form labels in EN and VI |

**Total: 38 tests**

## Writing a new test

### Pattern: page content assertion

```typescript
test('pricing page shows correct Vietnamese labels', async ({ page }) => {
    await page.goto('/vi/pricing');
    await expect(page.locator('h1')).toContainText('Bảng Giá');
    await expect(page.locator('.btn-header')).toHaveText('Bắt Đầu');
});
```

### Pattern: fresh browser context (no cookies)

```typescript
test('something with clean state', async ({ browser }) => {
    const ctx = await browser.newContext({
        locale: 'en-US',
        extraHTTPHeaders: { 'Accept-Language': 'en-US,en;q=0.9' },
    });
    const page = await ctx.newPage();
    await page.goto('/');
    // ... assertions
    await ctx.close();
});
```

### Pattern: testing cookie persistence via behaviour

```typescript
// DO NOT check raw cookie values — Laravel encrypts them.
// Instead, test the resulting URL/content.

test('locale set by /set-locale persists on next visit', async ({ browser }) => {
    const ctx = await browser.newContext({ locale: 'en-US' });
    const page = await ctx.newPage();

    await page.goto('/set-locale/vi');         // sets cookie
    const response = await page.goto('/');     // should use cookie
    expect(response?.url()).toContain('/vi');
    await ctx.close();
});
```

### Pattern: language switcher click

```typescript
test('click VI switcher → /vi equivalent URL', async ({ page }) => {
    await page.goto('/en/services');
    await page.locator('.lang-switcher a', { hasText: 'VI' }).click();
    await expect(page).toHaveURL(/\/vi\/services/);
});
```

### Pattern: translation completeness (no raw keys)

```typescript
const newKeys = ['pricing.title', 'pricing.subtitle'];

for (const key of newKeys) {
    test(`"${key}" not in /en`, async ({ page }) => {
        await page.goto('/en/pricing');
        const body = await page.locator('body').textContent();
        expect(body).not.toContain(key);
    });
}
```

## Adding tests for a new page

When a new page is added (e.g. `/solutions/sme-manufacturing`), add:

```typescript
test.describe('Solutions page translations', () => {
    test('/en/solutions/sme-manufacturing has English content', async ({ page }) => {
        await page.goto('/en/solutions/sme-manufacturing');
        await expect(page.locator('html')).toHaveAttribute('lang', 'en');
        await expect(page.locator('h1')).not.toBeEmpty();
        // Spot-check at least one translated string
        await expect(page.locator('header .btn-header')).toHaveText('Get Started');
    });

    test('/vi/solutions/sme-manufacturing has Vietnamese content', async ({ page }) => {
        await page.goto('/vi/solutions/sme-manufacturing');
        await expect(page.locator('html')).toHaveAttribute('lang', 'vi');
        await expect(page.locator('header .btn-header')).toHaveText('Bắt Đầu');
    });

    test('lang switcher on /en/solutions → /vi/solutions', async ({ page }) => {
        await page.goto('/en/solutions/sme-manufacturing');
        await page.locator('.lang-switcher a', { hasText: 'VI' }).click();
        await expect(page).toHaveURL(/\/vi\/solutions/);
    });
});
```

## Common selectors reference

| What to select | Selector |
|---------------|---------|
| `html[lang]` attribute | `page.locator('html')` + `.toHaveAttribute('lang', 'vi')` |
| Nav CTA button | `page.locator('header .btn-header')` |
| Language switcher | `page.locator('.lang-switcher')` |
| EN toggle | `page.locator('.lang-switcher a', { hasText: 'EN' })` |
| VI toggle | `page.locator('.lang-switcher a', { hasText: 'VI' })` |
| H1 hero title | `page.locator('h1')` |
| Body text | `page.locator('body')` (for `.textContent()`) |
| Footer | `page.locator('footer')` |
| Header nav | `page.locator('header nav')` |
| Nav link by label | `page.locator('header nav a', { hasText: 'Services' })` |

## Debugging failures

### "Expected URL to contain /vi, received /en"
→ Cookie not being set. Check that `/set-locale/vi` is called BEFORE the assertion URL visit.

### "Expected text not found" on translated content
→ The Blade view has hardcoded text, not `__()` calls. Fix the view.

### "locator('..') resolved to ... elements"
→ Selector is too broad. Add more context: `page.locator('header .lang-switcher a', {...})`.

### Server not reachable (connection refused)
```bash
# Ensure server is running on port 8787
php artisan serve --port=8787

# Or set webServer in playwright.config.ts:
# webServer: { command: 'php artisan serve --port=8787', port: 8787, reuseExistingServer: true }
```

### Test passes in CI but fails locally (or vice versa)
→ Check that the `locale` cookie from a previous test run isn't leaking.
Each test using `browser.newContext()` gets a fresh, isolated cookie jar.
Tests using the default `page` fixture share context — add `await page.context().clearCookies()` if needed.

## Config reference (playwright.config.ts)

```typescript
export default defineConfig({
    testDir: './tests/e2e',
    timeout: 15_000,
    retries: 0,
    use: {
        baseURL: 'http://localhost:8787',
    },
    projects: [{ name: 'chromium', use: { ...devices['Desktop Chrome'] } }],
});
```

To add Firefox/WebKit:
```typescript
projects: [
    { name: 'chromium', use: { ...devices['Desktop Chrome'] } },
    { name: 'firefox',  use: { ...devices['Desktop Firefox'] } },
    { name: 'webkit',   use: { ...devices['Desktop Safari'] } },
],
```
