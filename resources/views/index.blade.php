<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('style')

     <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', sans-serif;
}

body {
  background: #fff;
  color: #333;
  line-height: 1.5;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 25px 60px;
  border-bottom: 1px solid #eee;
}

.logo {
  font-size: 28px;
  font-weight: 600;
  color: #000;
}

nav {
  display: flex;
  gap: 30px;
}

nav a {
  position: relative;
  text-decoration: none;
  color: #333;
  font-size: 15px;
  font-weight: 500;
  padding-bottom: 5px;
  transition: color 0.2s;
}

nav a:hover,
nav a.active {
  color: #f36a3e;
}

nav a.active::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 2px;
  background: #f36a3e;
}

.hero {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  padding: 80px 60px;
}

.hero-text {
  max-width: 50%;
}

.hero-text h1 {
  font-size: 38px;
  font-weight: 700;
  margin-bottom: 15px;
}

.hero-text span {
  color: #f36a3e;
}

.hero-text p {
  color: #777;
  margin-bottom: 25px;
}

.hero-text button {
  padding: 12px 20px;
  font-weight: 700;
  border-radius: 6px;
  margin-right: 15px;
  cursor: pointer;
}

.btn-outline {
  background: #fff;
  border: 2px solid #f36a3e;
  color: #f36a3e;
  transition: 0.3s;
}

.btn-outline:hover {
  background: #f36a3e;
  color: #fff;
}

.btn-solid {
  background: #275d52;
  color: #fff;
  border: none;
  transition: 0.3s;
}

.btn-solid:hover {
  background: #1c4a40;
}

.hero-img img {
  max-width: 320px;
  border-radius: 10px;
  transition: transform 0.3s;
}

.hero-img img:hover {
  transform: scale(1.05);
}

.socials {
  position: absolute;
  right: 30px;
  top: 200px;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.socials a {
  writing-mode: vertical-rl;
  transform: rotate(180deg);
  background: #2b665c;
  color: #fff;
  padding: 10px 8px;
  border-radius: 8px;
  font-weight: 700;
  text-align: center;
  font-size: 14px;
  transition: 0.3s;
}

.socials a:hover {
  background: #f36a3e;
}

.services {
  display: flex;
  justify-content: center;
  gap: 0;
  padding: 0;
  background: #fff;
  border: 1px solid #ededed;
  border-radius: 12px;
  max-width: 1120px;
  margin: 60px auto;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.04);
  flex-wrap: wrap;
}

.service-card {
  flex: 1 1 250px;
  text-align: center;
  padding: 30px;
  transition: 0.3s;
  border-left: 1px solid #f1f1f1;
}

.service-card:first-child {
  border-left: none;
}

.service-card:hover {
  background: #fafafa;
}

.icon-circle {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  color: #fff;
}

.web {
  background: #2ec18f;
}

.dash {
  background: #f36a3e;
}

.app {
  background: #2196f3;
}

.service-card h3 {
  margin: 20px 0 10px;
}

.service-card p {
  color: #888;
  font-size: 14px;
}

.hire-me {
  background: #fff;
  padding: 60px 20px;
  text-align: center;
}

.hire-me h2 {
  font-size: 26px;
  margin-bottom: 10px;
}

.hire-me h2 span {
  color: #f36a3e;
}

.hire-me p {
  max-width: 750px;
  margin: 0 auto 40px;
  color: #666;
  font-size: 15px;
}

.hire-grid {
  display: grid;
  gap: 24px;
}

@media (min-width: 992px) {
  .hire-grid {
    grid-template-columns: repeat(3, 1fr);
    align-items: stretch;
  }

  .hire-card.full-img {
    grid-column: 3;
    grid-row: 1 / span 2;
    padding: 0;
  }
}

.hire-card {
  background: #f9f9f9;
  border-radius: 12px;
  padding: 25px;
  text-align: left;
  transition: 0.3s;
}

.hire-card:hover {
  transform: translateY(-5px);
}

.hire-card.full-img {
  overflow: hidden;
}

.hire-card.full-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hire-card.green {
  background: #e6f5f1;
}

.hire-card.orange {
  background: #fff3ec;
}

.hire-card.blue {
  background: #e6f0fa;
}

.hire-card.purple {
  background: #f3f0fa;
}

.hire-card h4 {
  font-size: 32px;
  font-weight: 700;
  color: #2ec18f;
  margin: 0 0 18px;
}

.hire-card.orange h4 {
  color: #f36a3e;
}

.hire-card.blue h4 {
  color: #2196f3;
}

.hire-card.purple h4 {
  color: #7c5af9;
}

.hire-card h3 {
  font-size: 18px;
  margin-bottom: 10px;
}

.hire-card p {
  font-size: 14px;
  color: #777;
}

@media (max-width: 768px) {
  header {
    flex-direction: column;
    gap: 15px;
    padding: 20px;
  }

  nav {
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
  }

  .hero {
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 40px 20px;
  }

  .hero-text,
  .hero-img {
    max-width: 100%;
  }

  .socials {
    position: static;
    flex-direction: row;
    justify-content: center;
    margin-top: 20px;
  }

  .services {
    flex-direction: column;
    gap: 30px;
    padding: 40px 20px;
  }

  .service-card {
    border: none;
    border-bottom: 1px solid #f1f1f1;
  }

  .service-card:last-child {
    border-bottom: none;
  }

  .hire-grid {
    grid-template-columns: 1fr;
  }

  .hire-card.full-img {
    display: none;
  }
}
.service-highlight {
  background: #111;
  padding: 80px 20px;
  color: white;
  text-align: center;
}

.service-highlight h2 {
  font-size: 32px;
  margin-bottom: 10px;
}

.service-highlight h2 span {
  color: #f36a3e;
}

.service-highlight p {
  max-width: 800px;
  margin: 0 auto 50px;
  color: #aaa;
  font-size: 15px;
}

.highlight-grid {
  display: grid;
  gap: 30px;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  max-width: 1100px;
  margin: 0 auto;
}

.highlight-card {
  background: #1c1c1c;
  border-radius: 12px;
  padding: 25px;
  text-align: left;
  transition: 0.3s ease;
  box-shadow: 0 0 0 transparent;
}

/* Hover Effect */
.highlight-card:hover {
  background: #2a2a2a;
  transform: scale(1.03);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
}

.highlight-card h3 {
  font-size: 18px;
  color: #fff;
  margin-bottom: 10px;
}

.highlight-card p {
  font-size: 14px;
  color: #bbb;
  margin-bottom: 20px;
}

.read-btn {
  background: transparent;
  border: none;
  color: white;
  font-weight: bold;
  font-size: 14px;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.read-btn span {
  background: #f36a3e;
  padding: 4px 6px;
  border-radius: 50%;
  font-size: 12px;
}

.highlight-card.active {
  background: #fff;
  color: #333;
  transform: scale(1.05);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
}

.highlight-card.active h3 {
  color: #f36a3e;
}

.highlight-card.active p {
  color: #444;
}

.highlight-card.active .read-btn {
  color: #333;
}

.highlight-card.active .read-btn span {
  background: #f36a3e;
  color: white;
}



.contact-section {
  background: #20232a;
  padding: 80px 20px;
  color: #fff;
  text-align: center;
}

.contact-container {
  max-width: 800px;
  margin: 0 auto;
}

.contact-section h2 {
  font-size: 32px;
  margin-bottom: 10px;
}

.contact-section h2 span {
  color: #f36a3e;
}

.contact-section p {
  color: #aaa;
  font-size: 15px;
  max-width: 650px;
  margin: 0 auto 40px;
}

.contact-form {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form-grid {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
}

.form-grid input {
  flex: 1 1 300px;
  padding: 14px 18px;
  background: #2b2f36;
  color: #fff;
  border: 1px solid #444;
  border-radius: 8px;
  font-size: 14px;
}

textarea {
  width: 100%;
  padding: 14px 18px;
  background: #2b2f36;
  color: white;
  border: 1px solid #444;
  border-radius: 8px;
  font-size: 14px;
  resize: vertical;
}

.contact-btn {
  background: #f36a3e;
  color: white;
  padding: 14px 28px;
  border: none;
  font-weight: bold;
  border-radius: 8px;
  cursor: pointer;
  align-self: flex-start;
  transition: background 0.3s;
}

.contact-btn:hover {
  background: #d35429;
}

@media (max-width: 768px) {
  .form-grid {
    flex-direction: column;
  }
}


  .footer {
    background-color: #111;
    padding: 30px 20px;
    color: #aaa;
    text-align: center;
    font-size: 14px;
  }

  .footer-content span {
    color: #f36a3e;
    font-weight: 600;
  }

  .footer-content span:hover {
    text-decoration: underline;
    cursor: pointer;
  }

  </style>
</head>
<body>

    @yield('main-content')
    
</body>
</html>