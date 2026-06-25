<?php
/**
 * MyFree 导航页 - 群晖 PHP 后端全功能动态版 (全新升级：支持手动Emoji与自动Logo智能版)
 */
define('DATA_FILE', __DIR__ . '/links.json');

// 已加密的管理员账号/密码配置
// 账号: admin
// 密码: admin123
define('ADMIN_USER_HASH', '$2y$10$v/itSfph9jWUCDJJ0/piC.6e.Lgc.sv5dO/Nrac44aaj3djEafVFG');
define('ADMIN_PASS_HASH', '$2y$10$XQA9ceL1UXz1fMGHlwx2Ze5gx7NsL8KnSdD7ajJbjmtBDKwO6HZmK');

define('PRIVATE_PASS', 'admin'); // 卡片8私密收藏的解锁密码

// --- 默认初始化数据 (如果 links.json 不存在则自动创建) ---
$defaultData = [
    ["id" => "cat_1", "title" => "🔍 搜索·引擎", "isPrivate" => false, "links" => [
        ["name" => "百度", "url" => "https://www.baidu.com/"],
        ["name" => "谷歌", "url" => "https://www.google.com/"],
        ["name" => "Github", "url" => "https://github.com/"],
        ["name" => "Google Gemini", "url" => "https://gemini.google.com/app"],
        ["name" => "DeepSeek", "url" => "https://www.deepseek.com"],
        ["name" => "豆包", "url" => "https://www.doubao.com/chat/"],
        ["name" => "YouTube下载1080教程", "url" => "https://github.com/Alvin9999-newpac/fanqiang/wiki/YouTube%E4%B8%8B%E8%BD%BD1080%E6%95%99%E7%A8%8B"],
        ["name" => "通用媒体下载器", "url" => "https://downloader.bhwa233.com/zh"]
    ]],
    ["id" => "cat_2", "title" => "📰 前沿·资讯·购物", "isPrivate" => false, "links" => [
        ["name" => "网易", "url" => "https://www.163.com/"],
        ["name" => "腾讯", "url" => "http://www.qq.com/"],
        ["name" => "新浪", "url" => "http://www.sina.com.cn/"],
        ["name" => "搜狐", "url" => "http://www.sohu.com/"],
        ["name" => "凤凰网", "url" => "http://www.ifeng.com/"],
        ["name" => "人民网", "url" => "http://www.people.com.cn/"],
        ["name" => "新华网", "url" => "http://xinhuanet.com/"],
        ["name" => "淘宝", "url" => "https://www.taobao.com/"],
        ["name" => "京东", "url" => "https://www.jd.com/"]
    ]],
    ["id" => "cat_3", "title" => "🏠 内网·私有云", "isPrivate" => false, "links" => [
        ["name" => "博客(内)", "url" => "https://xxx.com/wordpress/"],
        ["name" => "群晖", "url" => "https://xxx.com:5001/"],
        ["name" => "ikuai", "url" => "http://xxx.com:253/"],
        ["name" => "PVE", "url" => "https://xxx.com:8006/"],
    
    ]],
    ["id" => "cat_4", "title" => "🎥 影音·直播", "isPrivate" => false, "links" => [
        ["name" => "YouTube", "url" => "https://www.youtube.com/"],
        ["name" => "西瓜视频", "url" => "https://www.ixigua.com/"],
        ["name" => "无线新闻", "url" => "https://news.tvb.com/live/inews/"],
        ["name" => "線上看(直播)", "url" => "https://tv.wfuapp.com/2019/12/ctitv-news-live.html"],
        ["name" => "哔哩哔哩", "url" => "https://www.bilibili.com/"],
        ["name" => "港台直播", "url" => "https://www.hklive.tv/"],
        ["name" => "Netflix", "url" => "https://www.netflix.com/hk/login"]
    ]],
    ["id" => "cat_5", "title" => "⚙️ 开发者·运维", "isPrivate" => false, "links" => [
        ["name" => "恩山论坛", "url" => "https://www.right.com.cn/forum/forum-182-1.html"],
        ["name" => "吾爱破解", "url" => "https://www.52pojie.cn/"],
        ["name" => "腾讯云", "url" => "https://cloud.tencent.com/"],
        ["name" => "腾讯云国际", "url" => "https://console.tencentcloud.com/edgeone"],
        ["name" => "阿里云", "url" => "https://account.aliyun.com/"],
        ["name" => "华为云", "url" => "https://activity.huaweicloud.com/"],
        ["name" => "谷歌云", "url" => "https://console.cloud.google.com/welcome"],
        ["name" => "隔壁网", "url" => "http://www.gebi1.com/portal.php"],
        ["name" => "NodeSeek", "url" => "https://www.nodeseek.com/categories/daily"]
    ]],
    ["id" => "cat_6", "title" => "🔗 域名·CDN·工具集", "isPrivate" => false, "links" => [
        ["name" => "免费域名地址：dpdns.org", "url" => "https://dash.domain.digitalplat.org/panel/main"],
        ["name" => "ClawCloudRun", "url" => "https://url.cmliussss.com/rcc"],
        ["name" => "oracle", "url" => "https://www.oracle.com/"],
        ["name" => "Freenom", "url" => "https://my.freenom.com/clientarea.php"],
        ["name" => "Cloudflare", "url" => "https://dash.cloudflare.com/"],
        ["name" => "cloudns", "url" => "https://www.cloudns.net/"]
    ]],
    ["id" => "cat_7", "title" => "📖 教育·应急·订阅", "isPrivate" => false, "links" => [
        ["name" => "广东省干部培训网络学院", "url" => "https://gbpx.gd.gov.cn/gdceportal/"],
        ["name" => "继续医学教育培训平台-华医网", "url" => "https://cme28.91huayi.com/cme/index.html"],
        ["name" => "应急 · SOS.CMLiussss.net/auto", "url" => "https://SOS.CMLiussss.net/auto"],
        ["name" => "DNSHE免费域名管理平台", "url" => "https://my.dnshe.com/clientarea.php"],
        ["name" => "晨晨脚本（网课）", "url" => "https://doc.zhanyc.cn/pages/gpwj/"],
        ["name" => "MobaXterm-Keygen生成地址", "url" => "https://moba-xterm-keygen.vercel.app/"],
        ["name" => "微软5T网盘", "url" => "https://admin.cloud.microsoft/"],

    ]],
    ["id" => "cat_8", "title" => "🔒 私密·收藏", "isPrivate" => true, "links" => [

        ["name" => "Snippets 订阅", "url" => "https://_acme-challenge.sb.cloudns.biz"],
        ["name" => "公益订阅", "url" => "https://yf.yifangg.de5.net"],
    ]]
];

if (!file_exists(DATA_FILE)) {
    file_put_contents(DATA_FILE, json_encode($defaultData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
}

// --- 后端 API 请求路由处理 ---
session_start();
$action = $_GET['action'] ?? '';

if ($action === 'get_links') {
    header('Content-Type: application/json');
    echo file_get_contents(DATA_FILE);
    exit;
}

if ($action === 'login') {
    header('Content-Type: application/json');
    $input = json_decode(file_get_contents('php://input'), true);
    $username = $input['username'] ?? '';
    $password = $input['password'] ?? '';

    // 使用 password_verify 校验哈希
    if (password_verify($username, ADMIN_USER_HASH) && password_verify($password, ADMIN_PASS_HASH)) {
        $_SESSION['admin_auth'] = true;
        echo json_encode(['success' => true]);
    } else {
        http_response_code(401);
        echo json_encode(['success' => false, 'message' => '账号或密码错误']);
    }
    exit;
}

if ($action === 'save_links') {
    header('Content-Type: application/json');
    if (!isset($_SESSION['admin_auth']) || $_SESSION['admin_auth'] !== true) {
        http_response_code(403);
        echo json_encode(['error' => '未授权的操作']);
        exit;
    }
    $input = file_get_contents('php://input');
    if (json_decode($input) !== null) {
        file_put_contents(DATA_FILE, $input);
        echo json_encode(['success' => true]);
    } else {
        http_response_code(400);
        echo json_encode(['error' => '无效的数据格式']);
    }
    exit;
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>MyFree主页 · 导航</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <style>
        /* ===== CSS 变量 — 统一主题 ===== */
        :root {
            --bg-primary: #121826;
            --bg-card: rgba(255, 255, 255, 0.92);
            --bg-card-hover: rgba(255, 255, 255, 0.98);
            --bg-info: rgba(20, 28, 38, 0.65);
            --bg-footer: rgba(10, 18, 28, 0.75);
            --text-primary: #1f2f3f;
            --text-white: #fff;
            --radius-lg: 48px;
            --radius-md: 28px;
            --shadow-card: 0 12px 24px -10px rgba(0, 0, 0, 0.2);
            --shadow-card-hover: 0 24px 32px -14px rgba(0, 0, 0, 0.3);
            --shadow-info: 0 6px 16px rgba(0, 0, 0, 0.2);
            --accent-blue: #2196F3;
            --accent-blue-dark: #0f5bba;
            --font-mono: 'JetBrains Mono', 'SF Mono', 'Fira Code', monospace;
            --transition-default: 0.25s ease;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; list-style: none; text-decoration: none; }

        body {
            background: var(--bg-primary);
            font-family: system-ui, -apple-system, sans-serif;
            padding: 20px 16px 48px; min-height: 100vh;
            background-size: cover; background-position: center center; background-attachment: fixed;
            position: relative; transition: background-image 0.6s ease;
        }

        body::before {
            content: ""; position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(12, 18, 28, 0.35); backdrop-filter: blur(1px); pointer-events: none; z-index: 0;
        }

        #site-main { position: relative; z-index: 2; max-width: 1280px; margin: 0 auto; }

        /* ===== 顶部栏与天气 ===== */
        .info-bar {
            display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;
            background: var(--bg-info); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px);
            border-radius: var(--radius-lg); padding: 8px 20px; margin-bottom: 22px;
            color: var(--text-white); font-weight: 500; box-shadow: var(--shadow-info);
            border: 1px solid rgba(255, 255, 255, 0.2); gap: 12px;
        }
        .datetime-box { display: flex; align-items: baseline; gap: 12px; flex-wrap: wrap; }
        .date { background: rgba(0, 0, 0, 0.5); padding: 4px 14px; border-radius: 40px; font-size: 0.85rem; }
        .time { font-size: 1.5rem; font-weight: 600; font-family: var(--font-mono); text-shadow: 0 1px 2px black; }

        .weather-mini {
            background: rgba(0, 0, 0, 0.45); backdrop-filter: blur(8px); border-radius: var(--radius-lg);
            padding: 5px 16px; display: inline-flex; align-items: center; gap: 12px; font-size: 0.85rem;
        }
        .refresh-weather-mini {
            background: rgba(255, 255, 240, 0.2); border: none; border-radius: 50%;
            width: 24px; height: 24px; cursor: pointer; color: white; font-size: 0.7rem;
        }

        .admin-badge-btn {
            background: rgba(33, 150, 243, 0.4); padding: 5px 16px; border-radius: 60px; font-size: 0.72rem;
            color: white; border: 1px solid rgba(255,255,255,0.2); cursor: pointer; transition: var(--transition-default);
        }
        .admin-badge-btn:hover { background: var(--accent-blue); }

        /* ===== 搜索栏 ===== */
        .search-bar {
            background: var(--bg-card); backdrop-filter: blur(12px); border-radius: var(--radius-md);
            padding: 12px 20px; margin-bottom: 32px; box-shadow: 0 10px 24px rgba(0, 0, 0, 0.12);
        }
        .search-container { display: flex; align-items: center; gap: 14px; flex-wrap: wrap; }
        .engine-selector { display: flex; background: #eef2f6; border-radius: 56px; padding: 4px; gap: 2px; }
        .engine-option { padding: 7px 18px; border-radius: 40px; cursor: pointer; font-size: 0.85rem; font-weight: 600; border: none; background: transparent; }
        .engine-option.active { background: #1e6fdf; color: white; }
        .search-form { display: flex; flex: 1; gap: 12px; min-width: 200px; }
        .search-keyword { flex: 1; padding: 12px 20px; border: 1px solid #cfdde6; border-radius: 56px; font-size: 16px; outline: none; }
        .search-form input[type="submit"] { padding: 0 28px; background: #1e6fdf; color: white; border: none; border-radius: 56px; cursor: pointer; font-weight: 600; }

        /* ===== 网格与卡片样式 ===== */
        .works { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 24px; }
        .work-link { background: var(--bg-card); backdrop-filter: blur(14px); border-radius: var(--radius-md); box-shadow: var(--shadow-card); transition: var(--transition-default); border: 1px solid rgba(255, 255, 240, 0.8); overflow: hidden; }
        .work-link:hover { transform: translateY(-4px); box-shadow: var(--shadow-card-hover); }
        .container { padding: 18px 16px 20px; }

        .card-header-row { display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; border-left: 4px solid var(--accent-blue); padding-left: 14px; }
        .card-title-text { font-weight: 700; font-size: 1.28rem; background: linear-gradient(125deg, #1f2e3a, #2c4b6e); -webkit-background-clip: text; color: transparent; }

        .info ul li { margin-bottom: 8px; position: relative; }
        
        .link-item-wrapper { display: flex; align-items: center; justify-content: space-between; gap: 8px; width: 100%; }
        
        .link-item-wrapper a { 
            color: var(--text-primary); 
            display: flex; 
            align-items: center; 
            gap: 10px; 
            padding: 8px 14px; 
            border-radius: var(--radius-lg); 
            background: rgba(245, 248, 250, 0.7); 
            font-size: 0.9rem; 
            font-weight: 500; 
            transition: var(--transition-default);
            flex: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .link-item-wrapper a:hover { color: #1565C0; background: #e3f2fd; transform: translateX(4px); }
        
        /* 图标与Emoji 混合样式 */
        .link-icon-container { display: inline-flex; align-items: center; justify-content: center; flex-shrink: 0; }
        .link-favicon { width: 16px; height: 16px; border-radius: 4px; object-fit: contain; }
        .link-favicon.fav-hidden { display: none !important; }
        .link-emoji-fallback { font-size: 1rem; display: none; }
        .link-favicon.fav-hidden + .link-emoji-fallback { display: inline !important; }
        .custom-emoji-display { font-size: 1rem; margin-right: 2px; }

        /* ===== 管理控制组件 ===== */
        .admin-controls { display: none; gap: 6px; align-items: center; flex-shrink: 0; }
        body.admin-mode .admin-controls { display: inline-flex; }
        .btn-mini { background: rgba(0,0,0,0.06); border: none; width: 26px; height: 26px; border-radius: 50%; font-size: 0.8rem; cursor: pointer; display: inline-flex; align-items: center; justify-content: center; transition: var(--transition-default); }
        .btn-mini:hover { background: #e3f2fd; color: var(--accent-blue); transform: scale(1.1); }
        .btn-mini.del:hover { background: #ffebee; color: #d32f2f; }

        /* 全局更改保存条 */
        .admin-save-bar { position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); background: rgba(30, 111, 223, 0.96); padding: 12px 28px; border-radius: 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); z-index: 999; display: none; align-items: center; gap: 20px; color: white; font-weight: 600; backdrop-filter: blur(8px); border: 1px solid rgba(255,255,255,0.2); }
        .admin-save-bar button { background: white; color: #1e6fdf; border: none; padding: 6px 18px; border-radius: 20px; font-weight: bold; cursor: pointer; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }

        /* 管理弹窗 */
        .modal-mask { position: fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); backdrop-filter: blur(4px); z-index: 1000; display: none; align-items: center; justify-content: center; }
        .modal-content { background: white; padding: 24px; border-radius: 20px; width: 90%; max-width: 420px; display: flex; flex-direction: column; gap: 14px; box-shadow: 0 20px 40px rgba(0,0,0,0.3); }
        .modal-content h3 { color: var(--text-primary); font-size: 1.2rem; }
        .modal-content input { padding: 11px 16px; border: 1px solid #cfdde6; border-radius: 40px; outline: none; font-size: 0.95rem; }
        .modal-content input:focus { border-color: var(--accent-blue); }
        .modal-btns { display: flex; justify-content: flex-end; gap: 10px; margin-top: 6px; }
        .modal-btns button { padding: 8px 22px; border-radius: 40px; border: none; cursor: pointer; font-weight: 600; }
        .modal-btns .btn-confirm { background: #1e6fdf; color: white; }
        .modal-btns .btn-cancel { background: #eef2f6; color: #4a5a6a; }

        /* 私密列表锁 */
        .password-box { display: flex; flex-direction: column; gap: 12px; padding: 6px 14px; }
        .password-input-row { display: flex; gap: 10px; }
        .password-input-row input { flex: 1; padding: 10px 16px; border: 1px solid #cfdde6; border-radius: 40px; outline: none; }
        .password-input-row button { padding: 0 24px; background: #1e6fdf; color: white; border: none; border-radius: 56px; cursor: pointer; font-weight: bold; }
        .private-links { display: none; }
        .private-links.show { display: block; }
        .lock-btn-container { margin-top: 14px; text-align: right; }
        .relock-btn { background: none; border: none; color: #7a8a9a; cursor: pointer; font-size: 0.85rem; }

        .footer-credit { margin-top: 56px; text-align: center; background: var(--bg-footer); border-radius: 56px; padding: 14px 20px; color: #f0f3fc; font-size: 0.85rem; display: flex; justify-content: center; gap: 20px; align-items: center; }
        .ip-addr { font-family: var(--font-mono); background: #0f1822; padding: 5px 16px; border-radius: var(--radius-lg); }

        @media (max-width: 700px) {
            .info-bar, .search-container { flex-direction: column; align-items: stretch; }
            .search-form { flex-wrap: wrap; }
        }
    </style>
</head>
<body class="<?php echo isset($_SESSION['admin_auth']) ? 'admin-mode' : ''; ?>">
    <div id="site-main">
        <div class="info-bar">
            <div class="datetime-box">
                <time class="date" id="currentDate">加载中...</time>
                <span class="time" id="currentTime">--:--:--</span>
            </div>
            <div class="weather-mini">
                <span><span id="miniCity">📍 定位中...</span></span>
                <span>🌆 <span id="miniTemp">--°C</span></span>
                <span>💧 <span id="miniHumidity">--%</span></span>
                <button class="refresh-weather-mini" id="refreshWeatherMiniBtn">↻</button>
            </div>
            <button class="admin-badge-btn" id="adminAuthBtn"><?php echo isset($_SESSION['admin_auth']) ? '🛠️ 管理模式中' : '⚙️ 管理员登录'; ?></button>
        </div>

        <div class="search-bar">
            <div class="search-container">
                <div class="engine-selector">
                    <button class="engine-option active" data-engine="baidu">百度</button>
                    <button class="engine-option" data-engine="google">Google</button>
                </div>
                <form class="search-form" target="_blank" id="searchForm" action="https://www.baidu.com/s">
                    <input class="search-keyword" type="search" autocomplete="off" autofocus name="wd" id="searchInput" placeholder="百度一下，探索世界">
                    <input type="submit" value="搜索">
                </form>
            </div>
        </div>

        <div class="works" id="linksGridContainer"></div>

        <footer class="footer-credit">
            <span>🌏 当前IP ·</span>
            <span class="ip-addr" id="ipAddressDisplay">获取中...</span>
        </footer>
    </div>

    <div class="modal-mask" id="loginModal">
        <div class="modal-content">
            <h3>🔑 管理员认证</h3>
            <input type="text" id="adminUser" placeholder="用户名">
            <input type="password" id="adminPass" placeholder="密码">
            <div class="modal-btns">
                <button class="btn-cancel" onclick="closeModal('loginModal')">取消</button>
                <button class="btn-confirm" id="loginSubmitBtn">登录</button>
            </div>
        </div>
    </div>

    <div class="modal-mask" id="linkModal">
        <div class="modal-content">
            <h3 id="linkModalTitle">管理导航链接</h3>
            <input type="text" id="modalLinkName" placeholder="链接名称 (可直接粘贴或输入带有 Emoji 的字)">
            <input type="text" id="modalLinkUrl" placeholder="网址 URL (可填 '#'、网址，单独 Emoji 行请填 '#')">
            <div class="modal-btns">
                <button class="btn-cancel" onclick="closeModal('linkModal')">取消</button>
                <button class="btn-confirm" id="linkSaveSubmitBtn">保存确定</button>
            </div>
        </div>
    </div>

    <div class="admin-save-bar" id="adminSaveBar" style="<?php echo isset($_SESSION['admin_auth']) ? 'display:flex;' : ''; ?>">
        <span>🛠️ 更改已记录，别忘了同步保存：</span>
        <button id="globalSaveBtn">确认应用到群晖</button>
        <button style="background:none;color:white;border:1px solid rgba(255,255,255,0.4);" id="logoutBtn">退出</button>
    </div>

    <script>
    (function() {
        'use strict';
        const CONFIG = {
            DEFAULT_LAT: 23.0207, 
            DEFAULT_LON: 113.7518, 
            DEFAULT_CITY: '东莞',
            BING_MIRROR: 'https://bing.biturl.top/?resolution=1920&format=image&index=0&mkt=zh-CN',
            PRIVATE_PASSWORD: '<?php echo PRIVATE_PASS; ?>',
            STORAGE_KEY: 'myfree_private_unlocked'
        };

        // 天气代码 → 文字和 Emoji 映射
        const WEATHER_MAP = {
            0: '☀️ 晴',
            1: '🌤️ 晴间多云',
            2: '⛅ 多云',
            3: '☁️ 阴',
            45: '🌫️ 雾',
            48: '🌫️ 雾',
            51: '🌦️ 小毛毛雨',
            53: '🌦️ 毛毛雨',
            55: '🌧️ 大毛毛雨',
            61: '🌧️ 小雨',
            63: '🌧️ 中雨',
            65: '🌧️ 大雨',
            80: '🌧️ 阵雨',
            81: '🌧️ 中阵雨',
            82: '🌧️ 大阵雨',
            95: '⛈️ 雷暴',
            96: '⛈️ 雷暴加冰雹',
            99: '⛈️ 强雷暴加冰雹'
        };

        const $ = (id) => document.getElementById(id);
        let localLinksData = [];
        let currentEditTarget = null;
        let isAdmin = <?php echo isset($_SESSION['admin_auth']) ? 'true' : 'false'; ?>;

        // ----- 核心天气获取函数 -----
        async function fetchWeather() {
            const cityEl = $('miniCity');
            const tempEl = $('miniTemp');
            const humidEl = $('miniHumidity');

            // 显示加载状态
            cityEl.textContent = '📍 定位中...';
            tempEl.textContent = '--°C';
            humidEl.textContent = '--%';

            try {
                // 1. 通过 IP 获取地理位置
                const geoRes = await fetch('https://ip-api.com/json/?fields=status,message,city,lat,lon');
                if (!geoRes.ok) throw new Error('IP 定位服务不可用');
                const geoData = await geoRes.json();
                if (geoData.status !== 'success') throw new Error(geoData.message || '定位失败');

                const lat = geoData.lat;
                const lon = geoData.lon;
                const city = geoData.city || CONFIG.DEFAULT_CITY;

                // 2. 获取天气数据（温度、湿度、天气代码）
                const weatherRes = await fetch(
                    `https://api.open-meteo.com/v1/forecast?latitude=${lat}&longitude=${lon}&current_weather=true&hourly=relativehumidity_2m&timezone=auto`
                );
                if (!weatherRes.ok) throw new Error('天气服务不可用');
                const weatherData = await weatherRes.json();

                const current = weatherData.current_weather;
                if (!current) throw new Error('天气数据格式异常');

                const temperature = Math.round(current.temperature);
                const weatherCode = current.weathercode;
                const weatherDesc = WEATHER_MAP[weatherCode] || '🌡️ 未知';

                // 从 hourly 中取当前小时的湿度（open-meteo 的 current 不包含湿度，需从 hourly 提取）
                let humidity = '--';
                if (weatherData.hourly && weatherData.hourly.time && weatherData.hourly.relativehumidity_2m) {
                    const now = new Date();
                    const hourStr = now.toISOString().slice(0, 13) + ':00'; // 近似当前小时
                    const index = weatherData.hourly.time.indexOf(hourStr);
                    if (index !== -1) {
                        humidity = weatherData.hourly.relativehumidity_2m[index] + '%';
                    } else {
                        // 若无法精确匹配，取第一个值（容错）
                        humidity = weatherData.hourly.relativehumidity_2m[0] + '%';
                    }
                }

                // 更新 UI
                cityEl.textContent = `📍 ${city}`;
                tempEl.textContent = `${temperature}°C ${weatherDesc}`;
                humidEl.textContent = humidity;

            } catch (error) {
                console.warn('天气获取失败，使用默认数据:', error);
                // 降级方案：使用默认坐标（东莞）
                try {
                    const fallbackRes = await fetch(
                        `https://api.open-meteo.com/v1/forecast?latitude=${CONFIG.DEFAULT_LAT}&longitude=${CONFIG.DEFAULT_LON}&current_weather=true&hourly=relativehumidity_2m&timezone=auto`
                    );
                    if (fallbackRes.ok) {
                        const fbData = await fallbackRes.json();
                        const fbCurrent = fbData.current_weather;
                        if (fbCurrent) {
                            const temp = Math.round(fbCurrent.temperature);
                            const code = fbCurrent.weathercode;
                            const desc = WEATHER_MAP[code] || '🌡️ 未知';
                            let fbHumidity = '--%';
                            if (fbData.hourly && fbData.hourly.relativehumidity_2m) {
                                fbHumidity = fbData.hourly.relativehumidity_2m[0] + '%';
                            }
                            cityEl.textContent = `📍 ${CONFIG.DEFAULT_CITY} (默认)`;
                            tempEl.textContent = `${temp}°C ${desc}`;
                            humidEl.textContent = fbHumidity;
                            return;
                        }
                    }
                } catch (e) {
                    // 完全失败，显示占位信息
                    cityEl.textContent = '📍 无法定位';
                    tempEl.textContent = '--°C';
                    humidEl.textContent = '--%';
                }
            }
        }

        // ----- 页面初始化 -----
        window.addEventListener('DOMContentLoaded', () => {
            loadLinks();
            updateDateTime();
            setInterval(updateDateTime, 1000);
            initBase();

            // 绑定天气刷新按钮
            const refreshBtn = $('refreshWeatherMiniBtn');
            if (refreshBtn) {
                refreshBtn.addEventListener('click', () => {
                    fetchWeather();
                });
            }
        });

        // ----- 以下为原有函数（保持不变）-----
        async function loadLinks() {
            const res = await fetch('?action=get_links');
            localLinksData = await res.json();
            renderGrid();
        }

        function extractEmojiAndName(inputStr) {
            const emojiRegex = /^([\u{1F300}-\u{1F6FF}\u{1F900}-\u{1F9FF}\u{2600}-\u{26FF}\u{2700}-\u{27BF}📁🌏🔍📰🏠🎥⚙️🔗📖🔒🔐💼]+)/gu;
            const match = emojiRegex.exec(inputStr);
            if (match) {
                const emoji = match[1].trim();
                const name = inputStr.replace(emojiRegex, '').trim();
                return { emoji, name: name || "" };
            }
            return { emoji: null, name: inputStr.trim() };
        }

        function getBaseUrl(url) {
            if(!url || url === '#') return '#';
            try {
                const urlObj = new URL(url);
                return urlObj.origin;
            } catch(e) {
                return url;
            }
        }

        function renderGrid() {
            const container = $('linksGridContainer');
            container.innerHTML = '';
            
            localLinksData.forEach((category) => {
                const section = document.createElement('section');
                section.className = 'work-link';
                section.id = category.id;

                const inner = document.createElement('div');
                inner.className = 'container';

                const nav = document.createElement('nav');
                nav.className = 'info';

                const header = document.createElement('div');
                header.className = 'card-header-row';
                header.innerHTML = `<span class="card-title-text">${category.title}</span>`;
                
                const controls = document.createElement('div');
                controls.className = 'admin-controls';
                controls.innerHTML = `<button class="btn-mini" onclick="window.openAddModal('${category.id}')" title="添加链接">➕</button>`;
                header.appendChild(controls);
                nav.appendChild(header);

                const ul = document.createElement('ul');
                if (!category.isPrivate) {
                    category.links.forEach((link, idx) => {
                        ul.appendChild(createLinkLi(link, category.id, idx));
                    });
                    nav.appendChild(ul);
                } else {
                    const pBox = document.createElement('li');
                    pBox.className = 'password-box'; pBox.id = 'passwordBox';
                    pBox.innerHTML = `
                        <div class="prompt">🔑 请输入密码查看私密链接</div>
                        <div class="password-input-row">
                            <input type="password" id="privatePassword" placeholder="解密密码">
                            <button id="unlockBtn">解密</button>
                        </div>
                        <div class="password-error" id="passwordError"></div>
                    `;
                    ul.appendChild(pBox);

                    const pLinks = document.createElement('li');
                    pLinks.className = 'private-links'; pLinks.id = 'privateLinks';
                    const subUl = document.createElement('ul');
                    category.links.forEach((link, idx) => {
                        subUl.appendChild(createLinkLi(link, category.id, idx));
                    });
                    pLinks.appendChild(subUl);

                    const lockRow = document.createElement('div');
                    lockRow.className = 'lock-btn-container';
                    lockRow.innerHTML = `<button class="relock-btn" id="relockBtn">🔒 重新上锁</button>`;
                    pLinks.appendChild(lockRow);
                    ul.appendChild(pLinks);
                    nav.appendChild(ul);
                }
                inner.appendChild(nav);
                section.appendChild(inner);
                container.appendChild(section);
            });
            setupLock();
        }

        function createLinkLi(link, catId, idx) {
            const li = document.createElement('li');
            const wrapper = document.createElement('div');
            wrapper.className = 'link-item-wrapper';

            const a = document.createElement('a');
            a.href = link.url || '#';
            if(link.url && link.url !== '#') a.target = '_blank';
            
            const iconContainer = document.createElement('span');
            iconContainer.className = 'link-icon-container';

            if (link.customEmoji) {
                const emojiSpan = document.createElement('span');
                emojiSpan.className = 'custom-emoji-display';
                emojiSpan.textContent = link.customEmoji + ' ';
                iconContainer.appendChild(emojiSpan);
            } else {
                let faviconSrc = link.icon;
                if (!faviconSrc && link.url && link.url !== '#') {
                    const baseUrl = getBaseUrl(link.url);
                    faviconSrc = `https://favicon.duoshitong.com/v1/get?url=${encodeURIComponent(baseUrl)}`;
                }

                if(faviconSrc) {
                    const img = document.createElement('img');
                    img.className = 'link-favicon';
                    img.src = faviconSrc;
                    img.alt = '';
                    img.onerror = function() { this.classList.add('fav-hidden'); };
                    iconContainer.appendChild(img);
                }

                let defaultEmoji = '🌏 ';
                if(catId === 'cat_1') defaultEmoji = '🔍 ';
                if(catId === 'cat_2') defaultEmoji = '📰 ';
                if(catId === 'cat_3') defaultEmoji = '🏠 ';
                if(catId === 'cat_4') defaultEmoji = '🎥 ';
                if(catId === 'cat_5') defaultEmoji = '⚙️ ';
                if(catId === 'cat_6') defaultEmoji = '🔗 ';
                if(catId === 'cat_7') defaultEmoji = '📖 ';
                if(catId === 'cat_8') defaultEmoji = '📁 ';

                const fallbackSpan = document.createElement('span');
                fallbackSpan.className = 'link-emoji-fallback';
                fallbackSpan.textContent = defaultEmoji;
                iconContainer.appendChild(fallbackSpan);
            }

            a.appendChild(iconContainer);
            const textNode = document.createTextNode(link.name || '');
            a.appendChild(textNode);

            const controls = document.createElement('div');
            controls.className = 'admin-controls';
            controls.innerHTML = `
                <button class="btn-mini" onclick="window.openEditModal('${catId}', ${idx})" title="编辑">📝</button>
                <button class="btn-mini del" onclick="window.deleteLink('${catId}', ${idx})" title="删除">❌</button>
            `;

            wrapper.appendChild(a);
            wrapper.appendChild(controls);
            li.appendChild(wrapper);
            return li;
        }

        window.openAddModal = (catId) => {
            currentEditTarget = { type: 'add', catId };
            $('linkModalTitle').textContent = '添加新链接';
            $('modalLinkName').value = ''; $('modalLinkUrl').value = '';
            $('linkModal').style.display = 'flex';
        };

        window.openEditModal = (catId, idx) => {
            currentEditTarget = { type: 'edit', catId, idx };
            const link = localLinksData.find(c => c.id === catId).links[idx];
            $('linkModalTitle').textContent = '编辑链接属性';
            let displayValue = '';
            if(link.customEmoji) displayValue += link.customEmoji + ' ';
            displayValue += link.name || '';
            $('modalLinkName').value = displayValue; 
            $('modalLinkUrl').value = link.url || '';
            $('linkModal').style.display = 'flex';
        };

        window.deleteLink = (catId, idx) => {
            if (confirm('确定移除该导航链接吗？')) {
                localLinksData.find(c => c.id === catId).links.splice(idx, 1);
                renderGrid(); $('adminSaveBar').style.display = 'flex';
            }
        };

        window.closeModal = (id) => $(id).style.display = 'none';

        $('linkSaveSubmitBtn').addEventListener('click', () => {
            let rawName = $('modalLinkName').value.trim();
            let url = $('modalLinkUrl').value.trim();
            if (!rawName) return alert('名称不能为空！');
            
            const parsed = extractEmojiAndName(rawName);
            let finalName = parsed.name;
            let customEmoji = parsed.emoji;

            if (!url) {
                url = '#';
            } else if (url !== '#') {
                if (!/^https?:\/\//i.test(url)) url = 'http://' + url;
            }

            let linkObj = { name: finalName, url: url };
            if (customEmoji) {
                linkObj.customEmoji = customEmoji;
            } else if (url !== '#') {
                const baseUrl = getBaseUrl(url);
                linkObj.icon = `https://favicon.duoshitong.com/v1/get?url=${encodeURIComponent(baseUrl)}`;
            }

            const cat = localLinksData.find(c => c.id === currentEditTarget.catId);
            if (currentEditTarget.type === 'add') {
                cat.links.push(linkObj);
            } else {
                cat.links[currentEditTarget.idx] = linkObj;
            }
            
            closeModal('linkModal'); renderGrid(); $('adminSaveBar').style.display = 'flex';
        });

        $('globalSaveBtn').addEventListener('click', async () => {
            const res = await fetch('?action=save_links', { method: 'POST', headers: {'Content-Type': 'application/json'}, body: JSON.stringify(localLinksData) });
            if(res.ok) { alert('🎉 修改已完美持久化写入群晖 links.json！'); location.reload(); }
            else alert('保存失败，请检查文件写入权限。');
        });

        $('adminAuthBtn').addEventListener('click', () => { if (!isAdmin) $('loginModal').style.display = 'flex'; });
        $('loginSubmitBtn').addEventListener('click', async () => {
            const username = $('adminUser').value, password = $('adminPass').value;
            const res = await fetch('?action=login', { method: 'POST', headers: {'Content-Type': 'application/json'}, body: JSON.stringify({ username, password }) });
            if (res.ok) { location.reload(); } else { alert('认证失败，密码不正确。'); }
        });
        $('logoutBtn').addEventListener('click', () => {
            document.cookie = 'PHPSESSID=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
            location.reload();
        });

        function setupLock() {
            const pBox = $('passwordBox'), pLinks = $('privateLinks'), pInput = $('privatePassword'), pErr = $('passwordError');
            if(!pBox) return;
            const chk = () => {
                if (sessionStorage.getItem(CONFIG.STORAGE_KEY) === 'true') { pBox.style.display = 'none'; pLinks.classList.add('show'); }
                else { pLinks.classList.remove('show'); pBox.style.display = 'flex'; }
            };
            $('unlockBtn').onclick = () => {
                if (pInput.value.trim() === CONFIG.PRIVATE_PASSWORD) { sessionStorage.setItem(CONFIG.STORAGE_KEY, 'true'); chk(); }
                else { pErr.textContent = '❌ 解密口令错误'; }
            };
            $('relockBtn').onclick = () => { sessionStorage.removeItem(CONFIG.STORAGE_KEY); chk(); };
            chk();
        }

        function updateDateTime() {
            const now = new Date(), y = now.getFullYear(), m = String(now.getMonth() + 1).padStart(2, '0'), d = String(now.getDate()).padStart(2, '0');
            const w = ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'][now.getDay()];
            $('currentDate').textContent = `${y}.${m}.${d} ${w}`;
            $('currentTime').textContent = `${String(now.getHours()).padStart(2, '0')}:${String(now.getMinutes()).padStart(2, '0')}:${String(now.getSeconds()).padStart(2, '0')}`;
        }

        function initBase() {
            // 首次获取天气
            fetchWeather();

            // 设置背景
            document.body.style.backgroundImage = `url(${CONFIG.BING_MIRROR})`;

            // 获取 IP 地址显示
            fetch('https://api.ipify.org?format=json')
                .then(r => r.json())
                .then(d => { if(d.ip) $('ipAddressDisplay').textContent = d.ip; })
                .catch(() => { $('ipAddressDisplay').textContent = '无法获取'; });

            // 搜索引擎切换
            const opts = document.querySelectorAll('.engine-option');
            opts.forEach(b => b.onclick = function() {
                opts.forEach(o=>o.classList.remove('active'));
                this.classList.add('active');
                const engine = this.dataset.engine;
                if (engine === 'baidu') {
                    $('searchForm').action = 'https://www.baidu.com/s';
                    $('searchInput').name = 'wd';
                } else {
                    $('searchForm').action = 'https://www.google.com/search';
                    $('searchInput').name = 'q';
                }
            });
        }
    })();
    </script>
</body>
</html>
