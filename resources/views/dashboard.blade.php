<!-- Keep your original x-app-layout structure intact -->
<x-app-layout>
    <x-slot name="header">
        <div class="enhanced-header">
            <div class="header-content">
                <h2 class="page-title">
                    <i class="dashboard-icon"></i>
                    {{ __('Dashboard') }}
                </h2>
                <div class="header-actions">
                    <div class="search-container">
                        <input type="text" placeholder="Search..." class="search-input">
                        <i class="search-icon"></i>
                    </div>
                    <div class="notification-bell">
                        <i class="bell-icon"></i>
                        <span class="notification-badge">3</span>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="enhanced-dashboard-wrapper">
        <div class="dashboard-container">
            <!-- Enhanced Stats Cards Section -->
            <div class="stats-grid">
                <div class="stat-card primary">
                    <div class="stat-icon">
                        <i class="icon-users"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number">2,847</h3>
                        <p class="stat-label">Total Users</p>
                        <span class="stat-change positive">+12%</span>
                    </div>
                </div>
                
                <div class="stat-card success">
                    <div class="stat-icon">
                        <i class="icon-revenue"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number">$48,532</h3>
                        <p class="stat-label">Revenue</p>
                        <span class="stat-change positive">+8%</span>
                    </div>
                </div>
                
                <div class="stat-card warning">
                    <div class="stat-icon">
                        <i class="icon-orders"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number">1,247</h3>
                        <p class="stat-label">Orders</p>
                        <span class="stat-change negative">-3%</span>
                    </div>
                </div>
                
                <div class="stat-card info">
                    <div class="stat-icon">
                        <i class="icon-growth"></i>
                    </div>
                    <div class="stat-content">
                        <h3 class="stat-number">94.2%</h3>
                        <p class="stat-label">Growth Rate</p>
                        <span class="stat-change positive">+5.2%</span>
                    </div>
                </div>
            </div>

            <!-- Enhanced Main Content Card -->
            <div class="main-content-grid">
                <div class="welcome-card">
                    <div class="welcome-content">
                        <div class="welcome-text">
                            <h2 class="welcome-title">Welcome back! 👋</h2>
                            <p class="welcome-message">{{ __("You're logged in successfully!") }}</p>
                            <p class="welcome-subtitle">Here's what's happening with your dashboard today.</p>
                        </div>
                        <div class="welcome-actions">
                            <button class="action-btn primary">View Reports</button>
                            <button class="action-btn secondary">Settings</button>
                        </div>
                    </div>
                    <div class="welcome-illustration">
                        <div class="floating-elements">
                            <div class="element element-1"></div>
                            <div class="element element-2"></div>
                            <div class="element element-3"></div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions Panel -->
                <div class="quick-actions-card">
                    <h3 class="card-title">Quick Actions</h3>
                    <div class="actions-grid">
                        <a href="#" class="action-item">
                            <i class="action-icon icon-add-user"></i>
                            <span>Add User</span>
                        </a>
                        <a href="#" class="action-item">
                            <i class="action-icon icon-create-post"></i>
                            <span>Create Event</span>
                        </a>
                        <a href="#" class="action-item">
                            <i class="action-icon icon-view-reports"></i>
                            <span>View Reports</span>
                        </a>
                        <a href="#" class="action-item">
                            <i class="action-icon icon-settings"></i>
                            <span>Settings</span>
                        </a>
                    </div>
                </div>

                <!-- Recent Activity Panel -->
                <div class="activity-card">
                    <h3 class="card-title">Recent Events</h3>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-avatar">JD</div>
                            <div class="activity-details">
                                <p class="activity-text">John Doe logged in</p>
                                <span class="activity-time">2 minutes ago</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-avatar">SM</div>
                            <div class="activity-details">
                                <p class="activity-text">Sarah Miller created a new post</p>
                                <span class="activity-time">15 minutes ago</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-avatar">RJ</div>
                            <div class="activity-details">
                                <p class="activity-text">Robert Johnson updated settings</p>
                                <span class="activity-time">1 hour ago</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-avatar">AL</div>
                            <div class="activity-details">
                                <p class="activity-text">Alice Lee completed a task</p>
                                <span class="activity-time">3 hours ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Enhanced Professional Styling */
        :root {
            --primary-color: #3b82f6;
            --primary-dark: #1e40af;
            --success-color: #10b981;
            --warning-color: #f59e0b;
            --info-color: #8b5cf6;
            --danger-color: #ef4444;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-400: #9ca3af;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #111827;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .enhanced-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            padding: 0;
            margin: 0;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .page-title {
            font-size: 1.875rem;
            font-weight: 700;
            color: white;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin: 0;
        }

        .dashboard-icon::before {
            content: "📊";
            font-size: 1.5rem;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .search-container {
            position: relative;
        }

        .search-input {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 0.75rem;
            padding: 0.75rem 1rem 0.75rem 2.5rem;
            color: white;
            font-size: 0.875rem;
            width: 250px;
            transition: all 0.3s ease;
        }

        .search-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .search-input:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.4);
        }

        .search-icon::before {
            content: "🔍";
            position: absolute;
            left: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.875rem;
        }

        .notification-bell {
            position: relative;
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 0.5rem;
            transition: background-color 0.3s ease;
        }

        .notification-bell:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .bell-icon::before {
            content: "🔔";
            font-size: 1.25rem;
        }

        .notification-badge {
            position: absolute;
            top: 0.25rem;
            right: 0.25rem;
            background: var(--danger-color);
            color: white;
            font-size: 0.6875rem;
            font-weight: 600;
            padding: 0.125rem 0.375rem;
            border-radius: 0.75rem;
            min-width: 1.25rem;
            height: 1.25rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .enhanced-dashboard-wrapper {
            padding: 2rem;
            background: var(--gray-50);
            min-height: calc(100vh - 140px);
        }

        .dashboard-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-color);
        }

        .stat-card.primary::before { background: var(--primary-color); }
        .stat-card.success::before { background: var(--success-color); }
        .stat-card.warning::before { background: var(--warning-color); }
        .stat-card.info::before { background: var(--info-color); }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .stat-card {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .stat-icon {
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            background: var(--primary-color);
        }

        .stat-card.primary .stat-icon { background: var(--primary-color); }
        .stat-card.success .stat-icon { background: var(--success-color); }
        .stat-card.warning .stat-icon { background: var(--warning-color); }
        .stat-card.info .stat-icon { background: var(--info-color); }

        .icon-users::before { content: "👥"; }
        .icon-revenue::before { content: "💰"; }
        .icon-orders::before { content: "📦"; }
        .icon-growth::before { content: "📈"; }

        .stat-content {
            flex: 1;
        }

        .stat-number {
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--gray-800);
            margin: 0 0 0.25rem 0;
        }

        .stat-label {
            font-size: 0.875rem;
            color: var(--gray-500);
            margin: 0 0 0.5rem 0;
        }

        .stat-change {
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.125rem 0.5rem;
            border-radius: 0.375rem;
        }

        .stat-change.positive {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success-color);
        }

        .stat-change.negative {
            background: rgba(239, 68, 68, 0.1);
            color: var(--danger-color);
        }

        .main-content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
        }

        .welcome-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 1rem;
            padding: 2rem;
            color: white;
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .welcome-content {
            flex: 1;
            z-index: 2;
        }

        .welcome-title {
            font-size: 2rem;
            font-weight: 700;
            margin: 0 0 0.5rem 0;
        }

        .welcome-message {
            font-size: 1.125rem;
            margin: 0 0 0.5rem 0;
            opacity: 0.9;
        }

        .welcome-subtitle {
            font-size: 0.875rem;
            margin: 0 0 1.5rem 0;
            opacity: 0.8;
        }

        .welcome-actions {
            display: flex;
            gap: 1rem;
        }

        .action-btn {
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            font-size: 0.875rem;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
        }

        .action-btn.primary {
            background: white;
            color: var(--primary-color);
        }

        .action-btn.primary:hover {
            background: var(--gray-100);
            transform: translateY(-2px);
        }

        .action-btn.secondary {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .action-btn.secondary:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        .welcome-illustration {
            position: relative;
            width: 120px;
            height: 120px;
        }

        .floating-elements {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .element {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            animation: float 3s ease-in-out infinite;
        }

        .element-1 {
            width: 40px;
            height: 40px;
            top: 10px;
            right: 20px;
            animation-delay: 0s;
        }

        .element-2 {
            width: 20px;
            height: 20px;
            top: 60px;
            right: 10px;
            animation-delay: 1s;
        }

        .element-3 {
            width: 30px;
            height: 30px;
            top: 80px;
            right: 50px;
            animation-delay: 2s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .quick-actions-card,
        .activity-card {
            background: white;
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: var(--shadow);
            margin-bottom: 1.5rem;
        }

        .card-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--gray-800);
            margin: 0 0 1.5rem 0;
        }

        .actions-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .action-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 1rem;
            border-radius: 0.75rem;
            background: var(--gray-50);
            text-decoration: none;
            color: var(--gray-700);
            transition: all 0.3s ease;
            border: 1px solid var(--gray-200);
        }

        .action-item:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .action-icon {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .icon-add-user::before { content: "👤"; }
        .icon-create-post::before { content: "✏️"; }
        .icon-view-reports::before { content: "📊"; }
        .icon-settings::before { content: "⚙️"; }

        .activity-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .activity-item {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .activity-avatar {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            background: var(--primary-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 0.875rem;
        }

        .activity-details {
            flex: 1;
        }

        .activity-text {
            font-size: 0.875rem;
            color: var(--gray-800);
            margin: 0 0 0.25rem 0;
        }

        .activity-time {
            font-size: 0.75rem;
            color: var(--gray-500);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .enhanced-dashboard-wrapper {
                padding: 1rem;
            }

            .header-content {
                padding: 1rem;
                flex-direction: column;
                gap: 1rem;
            }

            .header-actions {
                width: 100%;
                justify-content: space-between;
            }

            .search-input {
                width: 200px;
            }

            .main-content-grid {
                grid-template-columns: 1fr;
            }

            .welcome-card {
                flex-direction: column;
                text-align: center;
                gap: 1.5rem;
            }

            .welcome-actions {
                justify-content: center;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .actions-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Dark mode support (if your app uses it) */
        .dark .enhanced-dashboard-wrapper {
            background: var(--gray-900);
        }

        .dark .stat-card,
        .dark .quick-actions-card,
        .dark .activity-card {
            background: var(--gray-800);
        }

        .dark .card-title,
        .dark .stat-number,
        .dark .activity-text {
            color: var(--gray-100);
        }

        .dark .stat-label,
        .dark .activity-time {
            color: var(--gray-400);
        }

        .dark .action-item {
            background: var(--gray-700);
            color: var(--gray-200);
            border-color: var(--gray-600);
        }
    </style>
</x-app-layout>