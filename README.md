<h2>👥 Group Members</h2>
<ul>
  <li><strong>Sadia Mabsurah – ID: 232-134-002</strong></li>
  <li><strong>Fawzia Fardowsi Tahia – ID: 232-134-004</strong></li>
</ul>

<h1 align="center">🏨 SaFa | Laravel Hotel Management System</h1>

<hr>

<p>
SaFa is a sophisticated, full-stack hospitality solution engineered with Laravel 12. This platform provides a seamless bridge between a premium guest-facing interface and a high-performance administrative command center. Designed for efficiency and scalability, SaFa automates the entire lifecycle of hotel reservations, inventory management, and guest communication.
</p>

<hr>

<h2>🚀 Key Features</h2>

<h3>🔐 Security &amp; Identity</h3>
<ul>
  <li><strong>Multi-Role Architecture:</strong> Intelligent automated redirection logic for Admin and Customer workflows.</li>
  <li><strong>Two-Factor Authentication (2FA):</strong> Enhanced account protection via mobile authenticator app integration.</li>
  <li><strong>Session Oversight:</strong> Monitor and remotely terminate active browser sessions across multiple devices.</li>
  <li><strong>Comprehensive Profile Management:</strong> Update name, email, passwords, and privacy controls from a dedicated portal.</li>
  <li><strong>Custom Admin Middleware:</strong> Robust route protection ensuring only authorized staff can access the backend.</li>
</ul>

<h3>🛌 Guest Experience</h3>
<ul>
  <li><strong>Modern Interface:</strong> Fully responsive HTML5/CSS3 template integrated into dynamic Laravel Blade views.</li>
  <li><strong>Smart Booking Engine:</strong> Real-time date-selection widget allowing guests to choose check-in and check-out dates.</li>
  <li><strong>Automatic Availability Checking:</strong> Prevents double booking by validating selected dates against existing reservations.</li>
  <li><strong>Dynamic Room Showcases:</strong> High-quality rendering of room categories including Regular, Deluxe, and Luxury with live pricing.</li>
  <li><strong>Room Detail Pages:</strong> Dedicated views highlighting amenities such as Free WiFi and specific bed configurations.</li>
  <li><strong>Booking Request Submission:</strong> Guests can submit room booking requests with an initial Pending status.</li>
  <li><strong>Contact System:</strong> Integrated portal for guests to send inquiries directly to the hotel management team.</li>
</ul>

<h3>📊 Administrative Management</h3>
<ul>
  <li><strong>Analytical Dashboard:</strong> Centralized overview for monitoring total clients, rooms, and booking statistics.</li>
  <li><strong>Room Inventory CRUD:</strong> Complete management of hotel rooms including add, update, and delete operations.</li>
  <li><strong>Booking Management:</strong> Admins can review all booking requests and update their status to Approved or Rejected.</li>
  <li><strong>Reservation Date Validation:</strong> Ensures rooms are not assigned to overlapping bookings.</li>
  <li><strong>Automated Notifications:</strong> SMTP-based email system sends booking confirmation or rejection emails to guests.</li>
  <li><strong>Advanced Media Handling:</strong> Upload, display, and delete room and gallery images with automatic file system cleanup.</li>
  <li><strong>Gallery Control:</strong> Admin tools to manage and update homepage visual assets.</li>
  <li><strong>Guest Message Handling:</strong> View and respond to customer inquiries received through the contact form.</li>
</ul>

<hr>

<h2>📊 Technical Architecture</h2>

<h3>Database Schema</h3>
<p>The system uses a relational MySQL database to ensure data consistency and integrity.</p>

<table border="1" cellpadding="10" cellspacing="0" width="100%">
  <tr>
    <th align="left">Table</th>
    <th align="left">Purpose</th>
    <th align="left">Core Attributes</th>
  </tr>
  <tr>
    <td>Users</td>
    <td>Identity &amp; Access</td>
    <td>id, name, email, usertype, two_factor_secret</td>
  </tr>
  <tr>
    <td>Rooms</td>
    <td>Inventory</td>
    <td>room_title, image, price, room_type, wifi</td>
  </tr>
  <tr>
    <td>Bookings</td>
    <td>Reservations</td>
    <td>user_id, room_id, start_date, end_date, status</td>
  </tr>
  <tr>
    <td>Galleries</td>
    <td>Media Assets</td>
    <td>id, image</td>
  </tr>
  <tr>
    <td>Notification</td>
    <td>System Alerts</td>
    <td>id, type, notifiable_id, data</td>
  </tr>
  <tr>
    <td>Contacts</td>
    <td>Guest Messages</td>
    <td>id, name, email, phone, message</td>
  </tr>
</table>

<hr>

<h2>Technology Stack</h2>
<ul>
  <li><strong>Framework:</strong> Laravel 12 (PHP 8.2+)</li>
  <li><strong>Frontend:</strong> Blade Templates, Tailwind CSS, Bootstrap</li>
  <li><strong>Authentication:</strong> Laravel Jetstream with Livewire</li>
  <li><strong>Database:</strong> MySQL</li>
  <li><strong>Mailing:</strong> SMTP Protocol</li>
  <li><strong>File Storage:</strong> Laravel Storage with symbolic linking</li>
</ul>

<hr>

<h2>⚙️ Installation &amp; Setup</h2>

<h3>Clone &amp; Install</h3>
<pre>
git clone https://github.com/SadiaMabsurah/SaFa-Hotel-Management-System.git
cd safa-hotel
composer install
npm install && npm run build
</pre>

<h3>Environment Configuration</h3>
<pre>
cp .env.example .env
php artisan key:generate
</pre>

<p>Update the .env file with your database credentials and SMTP email configuration.</p>

<h3>Initialize Database &amp; Assets</h3>
<pre>
php artisan migrate
php artisan storage:link
</pre>

<h3>Launch Application</h3>
<pre>
php artisan serve
</pre>

<hr>

<h2>📖 User Documentation</h2>

<h3>👤 Guest User Guide</h3>
<ul>
  <li>Register and log in to access booking features.</li>
  <li>Browse available rooms and view room details.</li>
  <li>Select preferred dates and submit booking requests.</li>
  <li>Track booking status from the user dashboard.</li>
  <li>Manage account security using profile settings and 2FA.</li>
</ul>

<h3>🛡️ Admin Command Center</h3>
<ul>
  <li>Manage rooms and room information.</li>
  <li>Review and manage booking requests.</li>
  <li>Approve or reject reservations.</li>
  <li>Send automated booking status emails.</li>
  <li>Manage gallery images and guest messages.</li>
</ul>

<hr>

<h2>❓ FAQs</h2>

<p><strong>How do I become an Admin?</strong><br>
Manually update the usertype field in the users table from user to admin.
</p>

<p><strong>Why are images not displaying?</strong><br>
Ensure you have run <code>php artisan storage:link</code>.
</p>

<p><strong>How does booking validation work?</strong><br>
The system checks approved bookings to ensure no date overlap occurs.
</p>
