import { chromium } from 'playwright';
const b = await chromium.launch();
const ctx = await b.newContext({ viewport: { width: 1440, height: 860 }, deviceScaleFactor: 2 });
const p = await ctx.newPage();
await p.goto('https://demo.hkincotech.com/en', { waitUntil: 'networkidle', timeout: 40000 });
await p.waitForTimeout(800);
await p.screenshot({ path: '/tmp/hkshots/public_home.png' });
await b.close(); console.log('ok');
