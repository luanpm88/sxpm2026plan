import { chromium } from 'playwright';
const b = await chromium.launch();
const ctx = await b.newContext({ viewport: { width: 1440, height: 900 }, deviceScaleFactor: 2 });
const p = await ctx.newPage();
for (const [n,u] of [['certs','/en/certifications'],['home','/en']]) {
  const r = await p.goto('http://localhost:8788'+u, { waitUntil:'networkidle', timeout:30000 });
  await p.waitForTimeout(500);
  await p.screenshot({ path:`/tmp/hkshots/v_${n}.png`, fullPage: true });
  console.log(n, r.status());
}
await b.close();
