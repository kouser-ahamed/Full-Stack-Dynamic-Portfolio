<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Interactive UI Card</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f3f3;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background-color: white;
      width: 300px;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      cursor: pointer;
      position: relative;
    }

    .card:hover {
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
      transform: scale(1.03);
    }

    .card-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .card-desc {
      font-size: 16px;
      color: #666;
    }

    .card-detail {
      display: none;
      margin-top: 15px;
      font-size: 14px;
      color: #444;
      border-top: 1px solid #ddd;
      padding-top: 10px;
    }

    .card.open .card-detail {
      display: block;
    }
  </style>
</head>
<body>

  <div class="card" id="infoCard">
    <div class="card-title">Interactive Card</div>
    <div class="card-desc">Click to learn more about this feature.</div>
    <div class="card-detail">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti sint fuga quaerat quo rerum libero eius error omnis. Magnam impedit odio, debitis saepe sequi quae aperiam explicabo dolor nobis iure.
    </div>
  </div>

  <script>
    document.getElementById("infoCard").addEventListener("click", function () {
      this.classList.toggle("open");
    });
  </script>

</body>
</html>
