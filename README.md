# Oriental Treasure · 东方美学轻奢珠宝独立站

> 版本：v1.0 · 2026-04-21
> 定位：面向北美/欧洲市场的东方美学轻奢珠宝独立站
> 团队：神冢（创始人）× 丞相（COO）× Claude Code（CTO）

---

## 📁 项目结构

```
Oriental-Treasure/
├── README.md                       ← 你在这里
├── CLAUDE.md                       ← Claude 开发规范
├── ROLES.md                        ← 三人分工手册
├── TASTE.md                        ← 审美校准档案
├── docs/
│   ├── Oriental-Treasure-内容资产.md
│   ├── Oriental-Treasure-开发手册.md
│   └── superpowers/
│       ├── specs/2026-04-21-技术规范.md   ← 设计规范
│       └── plans/2026-04-21-待办任务.md   ← 待办清单
└── src/
    ├── 主页设计.html               ← 完整首页（含购物车+结算）
    ├── products.html                ← 产品列表页
    └── products.json               ← 商品数据
```

---

## 🎯 项目概述

- **产品定位**：$35–$350，手工匠人制作，东方美学 + 现代廓形
- **目标市场**：美国为主（TikTok Shop），欧洲（英德）为辅
- **设计语言**：象牙白 + 墨黑 + 金色点缀，Playfair Display + Inter
- **核心技术**：纯前端静态站点，localStorage 购物车，假支付模拟
- **支付方案**：待定（不用 Shopify，方案待确认）

---

## 👥 团队分工

| 角色 | 人 | 职责 |
|------|---|------|
| 创始人/拍板 | 神冢 | 定方向、做决策、把控审美商业判断 |
| COO/调度 | 丞相 | 任务拆解、记忆管理、内容创作、进度追踪 |
| CTO/执行 | Claude Code | 代码开发、浏览器自动化、部署上线 |

详见 `ROLES.md`

---

## 📋 立即可执行的任务

Claude 可直接执行，无需额外 SPEC：

1. **SEO 技术规范** — robots.txt / sitemap.xml / meta标签 / OG tags
2. **移动端优化** — iOS Safari / Android 显示检查与修复
3. **404 页面** — 品牌友好404页面
4. **About 页面** — 品牌故事 + 匠人介绍
5. **Contact 页面** — 联系表单 + FAQ

详见 `docs/superpowers/plans/2026-04-21-待办任务.md`

---

## 🔗 重要规范

| 规范 | 位置 |
|------|------|
| 设计规范（色彩/字体） | `docs/superpowers/specs/2026-04-21-技术规范.md` |
| 审美原则 | `TASTE.md` |
| 购物车系统 | `docs/开发手册.md` 第四节 |
| 商品数据 | `src/products.json` |
| 品牌内容 | `docs/内容资产.md` |

---

## 📌 已确认决策

| 日期 | 决策 |
|------|------|
| 2026-04-21 | 独立站起步，纯静态HTML原型 |
| 2026-04-21 | 不用 Shopify，支付方案待定 |
| 2026-04-21 | 三人分工：神冢决策 + 丞相调度 + Claude执行 |
| 2026-04-21 | 文件分散 → 全部整理到 ~/Desktop/Oriental-Treasure/ |

---

## 🚀 快速开始

```bash
# 浏览器直接打开
open ~/Desktop/Oriental-Treasure/src/主页设计.html

# Claude 开发规范
cat ~/Desktop/Oriental-Treasure/CLAUDE.md
```