import { chromium } from 'playwright';
const b = await chromium.launch();
const ctx = await b.newContext({ viewport: { width: 1440, height: 900 }, deviceScaleFactor: 2 });
const p = await ctx.newPage();
const shots = [['home', '/en'], ['services', '/en/services']];
for (const [n, path] of shots) {
  await p.goto('http://localhost:8788' + path, { waitUntil: 'networkidle', timeout: 30000 });
  await p.waitForTimeout(500);
  await p.screenshot({ path: `/tmp/hkshots/crop_${n}_top.png` });
}
await b.close();
console.log('done');
