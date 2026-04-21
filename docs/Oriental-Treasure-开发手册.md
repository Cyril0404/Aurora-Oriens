# Oriental Treasure · 开发手册

> 记录日期：2026-04-21
> 维护人：Claude Code
> 版本：v1.0

---

## 一、项目概述

**Oriental Treasure** 是一个面向北美/欧洲市场的东方美学轻奢珠宝独立站。

- **产品定位**：$35–$350 客单价，手工匠人制作，东方美学 + 现代廓形
- **目标市场**：美国为主（TikTok Shop），欧洲（英国、德国）为辅
- **设计语言**：象牙白 + 墨黑 + 中国红点缀，Playfair Display + Inter 字体
- **核心技术**：纯前端静态站点，localStorage 购物车，假支付模拟

---

## 二、文件清单

| 文件 | 说明 | 状态 |
|------|------|------|
| `主页设计.html` | 完整首页，包含 Hero / Pillar / Collections / Featured / Craftsmanship / Newsletter / Footer | ✅ 完成 |
| `products.html` | 产品列表页，三个系列共 12 个商品，含 Add to Cart | ✅ 完成 |
| `products.json` | 商品数据 JSON（目前 products.html 已是硬编码，可替代） | ✅ 完成 |
| `Oriental-Treasure-内容资产.md` | 品牌内容资产：故事/SEO描述/SOP/邮件/社媒文案/内容日历 | ✅ 完成 |

---

## 三、代码结构

### 主页 `主页设计.html`

**CSS 变量（Design Tokens）**
```css
--color-ivory: #FFFFF0        /* 主背景色 */
--color-ivory-warm: #FAF8F5   /* 次背景色 */
--color-ink: #1A1A1A           /* 主文字色 */
--color-ink-light: #4A4A4A     /* 次文字色 */
--color-gold: #C9A84C          /* 强调色（金色） */
--color-gold-light: #E8D5A3    /* 金色浅版 */
--color-red-subtle: #B85C5A    /* 中国红（点缀） */
--color-gray-light: #F5F3EF    /* 分割线背景 */
--color-gray: #E0DDD8          /* 分割线 */
--font-serif: 'Playfair Display'  /* 标题字体 */
--font-sans: 'Inter'             /* 正文字体 */
```

**页面结构**
```
导航栏 (固定顶部，磨砂玻璃效果)
  ├── Logo: Oriental Treasure
  ├── 链接: Collections / Our Story / Bespoke / Jewelry Guide
  ├── 购物车图标 (带角标数量)
  └── CTA: Shop Now

Hero (100vh，双栏布局)
  ├── 左侧: Eyebrow / 标题 / 副标题 / 两个按钮
  └── 右侧: 大图 (Unsplash 直接引用)

品牌理念 (三栏，黑色背景)
  ├── Artisan Crafted
  ├── Certified Quality
  └── Global Delivery

Collections (三列卡片网格)
  ├── Daily Essentials (Jade Bangle, Pearl Earrings, Lotus Necklace, Dragon Ring)
  ├── Statement Edit (Phoenix Brooch, Dragon Scale Cuff, Imperial Court Earrings, Cloud Gate Pendant)
  └── Bespoke Service

Featured 单品 (双栏，浅色背景)
  └── Lotus Enamel Pendant + 详细元数据

工艺展示 (三列)
  ├── Gold Filigree
  ├── Cloisonné Enamel
  └── Jade Micro-Carving

Newsletter (黑色背景)

Footer
```

### 产品页 `products.html`

```
导航栏 (链接指向主页 products.html)
页面标题区 (黑色背景)

系列导航 (粘性定位)
  ├── Daily Essentials · $35–$65
  ├── Statement Edit · $65–$150
  └── Bespoke Service · $150+

系列区块 ×3
  └── 产品卡片网格 (auto-fill, min 300px)
        ├── 产品图 (1:1, hover scale 1.03)
        ├── Badge (可选)
        ├── 系列标签 / 名称 / 价格
        ├── 分割线
        ├── 描述 (3行截断)
        ├── 元数据列表
        ├── Care 提示 (左侧金线)
        └── 操作按钮 (Add to Cart / Details)

Footer
```

### 购物车 & 结算功能 (`主页设计.html` 内嵌)

**购物车状态**
```javascript
// localStorage key: 'ot_cart'
// 数据格式:
[
  {
    id: "de-001",
    name: "Jade Bangle Bracelet",
    price: 45,
    image: "https://...",
    quantity: 2
  }
]
```

**UI 组件**
- `nav__cart` — 导航栏右侧购物车图标，带数量角标
- `cart-drawer` — 右侧滑出面板（420px宽），包含商品列表、+/- 数量、删除、总价、Checkout 按钮
- `checkout-overlay` — 全屏覆盖层，4步结算流程

**结算步骤**
```
Step 1: Cart Review     → 商品确认 + 费用摘要
Step 2: Address         → 收件人/电话/邮箱/地址/城市/邮编/国家（含表单验证）
Step 3: Payment         → 支付宝/微信/信用卡选择 + 假支付加载动画
Step 4: Success         → 订单号 + 地址摘要 + 清空购物车
```

**关键函数**
```javascript
getCart()           // 从 localStorage 读取
saveCart(items)     // 写入 localStorage
cartTotal(items)    // 计算总价
cartCount(items)    // 计算总数量
updateBadge()       // 更新导航栏角标（带 pop 动画）
openCart() / closeCart()
openCheckout() / closeCheckout()
updateSteps()       // 更新步骤指示器状态
renderCartDrawer()  // 渲染购物车面板
validateAddress()    // 表单验证
```

---

## 四、商品数据

### 系列一：Daily Essentials ($35–$65)

| ID | 名称 | 价格 | 图 |
|----|------|------|-----|
| de-001 | Handcrafted Jade Bangle Bracelet | $45 | Unsplash |
| de-002 | Freshwater Pearl Drop Earrings | $38 | Unsplash |
| de-003 | Lotus Pendant Necklace | $35 | Unsplash |
| de-004 | Dragon Gate Ring | $55 | Unsplash |

### 系列二：Statement Edit ($65–$150)

| ID | 名称 | 价格 | 图 |
|----|------|------|-----|
| se-001 | Phoenix Feather Brooch | $78 | Unsplash |
| se-002 | Dragon Scale Cuff Bracelet | $95 | Unsplash |
| se-003 | Imperial Court Drop Earrings | $68 | Unsplash |
| se-004 | Cloud Gate Jade Pendant | $120 | Unsplash |

### 系列三：Bespoke Service ($150+)

| ID | 名称 | 价格 | 备注 |
|----|------|------|------|
| bp-001 | Custom Initials Pendant | From $150 | Enquire |
| bp-002 | Heritage Replica Collection | From $280 | Enquire |
| bp-003 | Birthstone + Zodiac Collection | From $195 | Enquire |
| bp-004 | Custom Engagement Ring | From $350 | Consultation |

---

## 五、设计规范

### 色彩使用

| 颜色 | 色值 | 用途 |
|------|------|------|
| 象牙白 | `#FFFFF0` | 主背景，90% 使用 |
| 墨黑 | `#1A1A1A` | 文字、按钮，8% 使用 |
| 金色 | `#C9A84C` | 强调（价格、高亮、hover），2% 使用 |
| 中国红 | `#B85C5A` | Badge、错误提示，点缀使用 |
| 浅灰 | `#F5F3EF` | Card 背景、Summary 背景 |
| 中灰 | `#E0DDD8` | 分割线、边框 |

### 字体

| 用途 | 字体 | 字重 |
|------|------|------|
| 标题 / Logo / 产品名 | Playfair Display | 400/500/600 |
| 正文 / 按钮 / 表单 | Inter | 300/400/500 |
| 中文备选 | 思源宋体 | — |

### 图片来源
- Unsplash 直接引用（带 `?w=600&q=80` 参数）
- 产品图建议后续替换为实物拍摄

---

## 六、内容资产

详细见 `Oriental-Treasure-内容资产.md`，包含：

### 品牌故事
- About Us 英文完整版（含 Artisan Crafted / Certified Quality / Global Delivery 三个故事）
- Heritage 工艺故事：Gold Filigree / Cloisonné Enamel / Jade Micro-Carving
- 中文参考版

### SEO 产品描述
每个产品含：SEO 标题（关键词结构）、英文描述（钩子→故事→规格→护理）

### 客服 SOP 邮件
- 订单确认邮件（自动）
- 发货通知（手动）
- 催好评请求
- 物流异常跟进
- 退换货回复（未发货/已签收/质量问题三种）
- 差评挽回
- 首单感谢 + 复购引导

### Klaviyo 邮件序列（自动化 Flow）
- Welcome Series（7天3封，含 10% 首单码）
- Abandoned Cart（3天3封）
- Post-Purchase（30天4封）
- Win-Back（60天未回购2封）

### 社媒文案
- TikTok 脚本 ×3（测评类/工艺故事类/场景送礼类）
- Instagram 帖子模板 ×4（产品发布/工艺展示/UGC转发/品牌故事）
- Instagram Reels caption 模板 ×2
- TikTok Bio 文案
- Hashtag 策略（核心 + 品类 + 流量分层）

### 内容日历
首月 4 周每周 2-3 条内容，包含选题、平台、类型

---

## 七、部署状态 & 下一步

### 当前状态
- 纯前端静态文件，无需后端
- 图片全部引用 Unsplash CDN
- 购物车 / 结算完全在浏览器内运行
- 主页和商品页之间的购物车通过 `localStorage` 共享

### 待完成（建议优先级排序）

| 优先级 | 事项 | 说明 |
|--------|------|------|
| 🔴 高 | 替换产品图片 | 实物拍摄或 Canva 设计，替换 Unsplash |
| 🔴 高 | 接入 Shopify | 将静态 HTML 转为 Shopify 主题，启用真实支付 |
| 🟡 中 | 接入 Klaviyo | 配置自动化邮件序列 |
| 🟡 中 | 添加 About Us 页面 | 使用品牌故事内容 |
| 🟡 中 | 添加 Contact 页面 | 含联系表单 + 常见问题 |
| 🟡 中 | 域名 + HTTPS | Namecheap 购买域名 |
| 🟢 低 | SEO 优化 | 添加 meta description / OG tag / sitemap |
| 🟢 低 | 移动端优化 | 测试 iOS Safari 购物流程 |
| 🟢 低 | 加入 WhatsApp 客服 | 浮窗按钮，接入 Twilio / WhatsApp Business API |

### Shopify 接入建议
1. 在 Shopify 创建店铺，安装 Basic Shopify 主题
2. 将 `主页设计.html` 的设计语言应用到 Shopify 的 Dawn 或 Studio 主题
3. 产品数据通过 Shopify Admin CSV 导入
4. 结账流程使用 Shopify Checkout（含真实支付：Shopify Payments / Stripe）
5. 邮件自动化用 Klaviyo 官方 Shopify 集成

---

## 八、故障排查

### 购物车数据丢失
- 检查浏览器是否开启了 localStorage
- 检查 `localStorage.getItem('ot_cart')` 是否返回正常 JSON
- 跨域情况下 localStorage 不共享（确保都在同一域名下）

### 购物车在主页和商品页不共享
- 两个页面都使用同一个 key `ot_cart`，同一域名下自动共享

### 结算流程无法前进
- 检查 Address 步骤表单是否有红色 error 提示
- 表单验证逻辑在 `validateAddress()` 函数，按字段逐项检查

### 产品图加载慢
- Unsplash CDN 在国内可能加载慢，建议部署时替换为国内 CDN 或实物图

---

*本手册随项目迭代更新。每次重大变更后在此记录。*
