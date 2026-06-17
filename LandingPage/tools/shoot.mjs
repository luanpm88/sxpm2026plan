// Screenshot helper for HKIncotech landing redesign verification.
// Usage: node tools/shoot.mjs <tag> [width]
//   tag   -> subfolder under /tmp/hkshots/<tag>
//   width -> viewport width (default 1440)
import { chromium } from 'playwright';
import fs from 'fs';

const tag = process.argv[2] || 'shot';
const width = parseInt(process.argv[3] || '1440', 10);
const base = 'http://localhost:8788';
const outDir = `/tmp/hkshots/${tag}`;
fs.mkdirSync(outDir, { recursive: true });

const pages = [
  ['home', '/en'],
  ['services', '/en/services'],
  ['case-studies', '/en/case-studies'],
  ['about', '/en/about-us'],
  ['scrum', '/en/scrum'],
  ['tech-stack', '/en/tech-stack'],
  ['pricing', '/en/pricing'],
  ['contact', '/en/contact'],
];

const browser = await chromium.launch();
const ctx = await browser.newContext({ viewport: { width, height: 1000 }, deviceScaleFactor: 1 });
const page = await ctx.newPage();

for (const [name, path] of pages) {
  try {
    const resp = await page.goto(base + path, { waitUntil: 'networkidle', timeout: 30000 });
    await page.waitForTimeout(600);
    const file = `${outDir}/${name}.png`;
    await page.screenshot({ path: file, fullPage: true });
    console.log(`${name.padEnd(14)} ${resp ? resp.status() : '?'}  -> ${file}`);
  } catch (e) {
    console.log(`${name.padEnd(14)} FAILED: ${e.message.split('\n')[0]}`);
  }
}
await browser.close();
console.log('done:', outDir);
