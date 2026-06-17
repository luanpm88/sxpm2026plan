import { chromium } from 'playwright';
const b = await chromium.launch();
const ctx = await b.newContext({ viewport: { width: 1440, height: 760 }, deviceScaleFactor: 2 });
const p = await ctx.newPage();
await p.goto('http://localhost:8788/en', { waitUntil: 'networkidle', timeout: 30000 });
// find footer and scroll it into view
const el = p.locator('footer, .footer, [class*=footer]').last();
await el.scrollIntoViewIfNeeded({ timeout: 5000 }).catch(()=>{});
await p.waitForTimeout(600);
await p.screenshot({ path: '/tmp/hkshots/footer.png' });
await b.close(); console.log('ok');
