# Aurora Oriens · 开发项目手册

> 版本：v1.0 · 2026-04-21（品牌名更新：Aurora Oriens）
> 原名：Oriental Treasure
> 定位：电商独立站，面向北美/欧洲东方美学轻奢珠宝市场
> 团队：神冢（创始人/拍板）× 丞相（COO/调度）× Claude Code（CTO/执行）

---

## 🎯 项目背景

### 产品定位
- **品牌名**：Aurora Oriens（拉丁文"东方晨曦"）
- **产品**：东方美学轻奢珠宝，手工匠人制作
- **客单价**：$35–$350
- **目标市场**：美国为主（TikTok Shop），欧洲（英德）为辅
- **品牌调性**：Heritage + Everyday Luxury + Artisan + Intentional

### 当前阶段
- 静态HTML原型已完成（首页 + 产品列表）
- 购物车/结算流程在浏览器内可用（localStorage）
- 品牌内容资产完整（SOP/社媒文案/邮件序列）

---

## 📁 项目文件结构

```
Aurora-Oriens/
├── README.md                        ← 项目总览（必读）
├── CLAUDE.md                        ← Claude开发规范（必读）
├── ROLES.md                         ← 三人分工手册
├── TASTE.md                         ← 审美校准档案
├── docs/
│   ├── Aurora-Oriens-内容资产.md    ← 品牌内容（故事/SOP/社媒）
│   ├── Aurora-Oriens-开发手册.md     ← 技术架构/函数文档
│   └── superpowers/
│       ├── specs/
│       │   └── 2026-04-21-技术规范.md    ← 设计规范/色彩/字体/规范
│       └── plans/
│           └── 2026-04-21-待办任务.md   ← 待办任务清单（Claude直接执行）
└── src/
    ├── 主页设计.html                 ← 完整首页（已实现购物车+结算）
    ├── products.html                 ← 产品列表页
    └── products.json                 ← 商品数据
```

---

## 🎨 设计规范

### 色彩（不可修改）
| 变量 | 色值 | 用途 |
|------|------|------|
| `--color-ivory` | `#FFFFF0` | 主背景，90%使用 |
| `--color-ink` | `#1A1A1A` | 主文字/按钮 |
| `--color-gold` | `#C9A84C` | 强调（价格/hover） |
| `--color-red-subtle` | `#B85C5A` | 点缀（badge/错误） |

### 字体
- 标题：Playfair Display, serif
- 正文：Inter, sans-serif

### 审美原则（来自TASTE.md）
- ✅ Heritage + Everyday Luxury + Artisan + Intentional
- ❌ 过度奢华/批量生产感/土豪风/过时传统中国风
- 文案：高端旅行杂志风格，故事驱动
- 禁用词：cheap/fast fashion/bargain（用honest pricing）

---

## 🛠 开发约束

### 必做
- [ ] 每项改动后自测（至少打开页面验证）
- [ ] 遵循设计规范（色彩/字体/布局）
- [ ] 命名规范：中文文件名（保持）
- [ ] 变动超过3个文件需列出改动清单
- [ ] 交付格式：「完成项 / 未完成项 / 下一步」

### 禁止
- ❌ 不确认就默认假设 → 先问
- ❌ 不自测就交付
- ❌ 擅改设计规范
- ❌ 绕过丞相直接交付神冢

---

## 📋 任务执行顺序

```
1. SEO 技术规范（robots.txt / sitemap / meta）
2. 移动端响应式优化（iOS Safari 检查）
3. 404 页面
4. About 页面
5. Contact 页面
```

详见 `docs/superpowers/plans/2026-04-21-待办任务.md`

---

## 📌 已确认决策

| 日期 | 决策 |
|------|------|
| 2026-04-21 | 不用 Shopify，自研方案（支付方案待定） |
| 2026-04-21 | 静态 HTML 原型先行，电商功能后续接入 |
| 2026-04-21 | 三人分工：神冢决策 + 丞相调度 + Claude 执行 |
| 2026-04-21 | 项目文件全部整理到 ~/Desktop/Aurora-Oriens/ |

---

_本文件由丞相维护，Claude 执行前必读。_