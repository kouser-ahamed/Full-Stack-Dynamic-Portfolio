
<aside class="sidebar" style="width: 220px; background: #222d32; color: #fff; padding: 30px 0; min-height: 100vh; position: fixed;">
	<div style="text-align: center; margin-bottom: 30px;">
		<h2 style="font-size: 1.5rem; font-weight: bold; letter-spacing: 1px;">Admin Panel</h2>
	</div>
	<ul style="list-style: none; padding: 0; margin: 0;">
		<li style="margin-bottom: 18px;">
			<a href="{{ route('admin.dashboard') }}" style="color: #fff; text-decoration: none; display: block; padding: 10px 30px; border-radius: 4px; transition: background 0.2s;">
				<i class="fas fa-tachometer-alt"></i> Dashboard
			</a>
		</li>
		<li style="margin-bottom: 18px;">
			<a href="{{ route('admin.users.index') }}" style="color: #fff; text-decoration: none; display: block; padding: 10px 30px; border-radius: 4px; transition: background 0.2s;">
				<i class="fas fa-users"></i> Users
			</a>
		</li>
		<li style="margin-bottom: 18px;">
			<a href="{{ route('admin.projects.index') }}" style="color: #fff; text-decoration: none; display: block; padding: 10px 30px; border-radius: 4px; transition: background 0.2s;">
				<i class="fas fa-briefcase"></i> Projects
			</a>
		</li>
		<li style="margin-bottom: 18px;">
			<a href="{{ route('admin.skills.index') }}" style="color: #fff; text-decoration: none; display: block; padding: 10px 30px; border-radius: 4px; transition: background 0.2s;">
				<i class="fas fa-cogs"></i> Skills
			</a>
		</li>
		<li style="margin-bottom: 18px;">
			<a href="{{ route('admin.education.index') }}" style="color: #fff; text-decoration: none; display: block; padding: 10px 30px; border-radius: 4px; transition: background 0.2s;">
				<i class="fas fa-graduation-cap"></i> Education
			</a>
		</li>
		<li style="margin-bottom: 18px;">
			<a href="{{ route('admin.achievements.index') }}" style="color: #fff; text-decoration: none; display: block; padding: 10px 30px; border-radius: 4px; transition: background 0.2s;">
				<i class="fas fa-trophy"></i> Achievements
			</a>
		</li>
		<li style="margin-bottom: 18px;">
			<a href="{{ route('admin.experiences.index') }}" style="color: #fff; text-decoration: none; display: block; padding: 10px 30px; border-radius: 4px; transition: background 0.2s;">
				<i class="fas fa-briefcase"></i> Experiences
			</a>
		</li>
		<li>
			<a href="{{ route('admin.logout') }}" style="color: #fff; text-decoration: none; display: block; padding: 10px 30px; border-radius: 4px; background: #d9534f;">
				<i class="fas fa-sign-out-alt"></i> Logout
			</a>
		</li>
	</ul>
</aside>
