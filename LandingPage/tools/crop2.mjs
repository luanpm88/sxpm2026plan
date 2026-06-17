import { chromium } from 'playwright';
const b = await chromium.launch();
const ctx = await b.newContext({ viewport: { width: 1440, height: 900 }, deviceScaleFactor: 2 });
const p = await ctx.newPage();
const url = process.argv[2] || '/en/services';
const matches = (process.argv[3] || '').split('|').filter(Boolean);
await p.goto('http://localhost:8788' + url, { waitUntil: 'networkidle', timeout: 30000 });
await p.waitForTimeout(500);
let i = 0;
for (const m of matches) {
  try {
    const el = p.locator(`text=${m}`).first();
    await el.scrollIntoViewIfNeeded({ timeout: 5000 });
    await p.waitForTimeout(400);
    await p.screenshot({ path: `/tmp/hkshots/seg_${i}_${m.replace(/[^a-z0-9]/gi,'').slice(0,12)}.png` });
    console.log('shot', i, m);
  } catch (e) { console.log('miss', m, e.message.split('\n')[0]); }
  i++;
}
await b.close(); console.log('done');
