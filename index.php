<?php
include('header.php')
?>

<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!--Début Page-->
    <div class="page_plongee">
        <h2 id="plongee">Plongée</h2>
        <div class="ligne">
            <div class="produit">
                <button class="presta_plongee" onclick="showPopup()">Plongée encadrant</button>
                    <div id="popup" class="popup">
                        <div class="popup-content">
                                <div class="input-group">
                                    <label for="num-personnes">Nombre de personnes:</label>
                                    <button onclick="decrement()">-</button>
                                    <input type="number" id="num-personnes" min="1" max="10" value="1">
                                    <button onclick="increment()">+</button>
                                </div>
                                <button onclick="hidePopup()">Valider</button>
                        </div>
                    </div>
            </div>
            <div class="produit">
                <button class="presta_plongee" onclick="showPopup()">Plongée encadrant technique</button>
                    <div id="popup2" class="popup">
                        <div class="popup-content">
                                <div class="input-group">
                                    <label for="num-personnes">Nombre de personnes:</label>
                                    <button onclick="decrement()">-</button>
                                    <input type="number" id="num-personnes" min="1" max="10" value="1">
                                    <button onclick="increment()">+</button>
                                </div>
                                <button onclick="hidePopup()">Valider</button>
                        </div>
                    </div>
            </div>
            <div class="produit">
                <button class="presta_plongee" onclick="showPopup()">Plongée encadrée</button>
                    <div id="popup3" class="popup">
                        <div class="popup-content">
                                <div class="input-group">
                                    <label for="num-personnes">Nombre de personnes:</label>
                                    <button onclick="decrement()">-</button>
                                    <input type="number" id="num-personnes" min="1" max="10" value="1">
                                    <button onclick="increment()">+</button>
                                </div>
                                <button onclick="hidePopup()">Valider</button>
                        </div>
                    </div>
            </div>
            <div class="produit">
                <button class="presta_plongee" onclick="showPopup()">Plongée apnée</button>
                    <div id="popup" class="popup">
                        <div class="popup-content">
                                <div class="input-group">
                                    <label for="num-personnes">Nombre de personnes:</label>
                                    <button onclick="decrement()">-</button>
                                    <input type="number" id="num-personnes" min="1" max="10" value="1">
                                    <button onclick="increment()">+</button>
                                </div>
                                <button onclick="hidePopup()">Valider</button>
                        </div>
                    </div>
            </div>
            <div class="produit">
                <button class="presta_plongee" onclick="showPopup()">Plongée encadrant</button>
                    <div id="popup" class="popup">
                        <div class="popup-content">
                                <div class="input-group">
                                    <label for="num-personnes">Nombre de personnes:</label>
                                    <button onclick="decrement()">-</button>
                                    <input type="number" id="num-personnes" min="1" max="10" value="1">
                                    <button onclick="increment()">+</button>
                                </div>
                                <button onclick="hidePopup()">Valider</button>
                        </div>
                    </div>
            </div>
            <div class="produit">
                <button class="presta_plongee" onclick="showPopup()">Plongée encadrant technique</button>
                    <div id="popup2" class="popup">
                        <div class="popup-content">
                                <div class="input-group">
                                    <label for="num-personnes">Nombre de personnes:</label>
                                    <button onclick="decrement()">-</button>
                                    <input type="number" id="num-personnes" min="1" max="10" value="1">
                                    <button onclick="increment()">+</button>
                                </div>
                                <button onclick="hidePopup()">Valider</button>
                        </div>
                    </div>
            </div>
            <div class="produit">
                <button class="presta_plongee" onclick="showPopup()">Plongée encadrée</button>
                    <div id="popup3" class="popup">
                        <div class="popup-content">
                                <div class="input-group">
                                    <label for="num-personnes">Nombre de personnes:</label>
                                    <button onclick="decrement()">-</button>
                                    <input type="number" id="num-personnes" min="1" max="10" value="1">
                                    <button onclick="increment()">+</button>
                                </div>
                                <button onclick="hidePopup()">Valider</button>
                        </div>
                    </div>
            </div>
            <div class="produit">
                <button class="presta_plongee" onclick="showPopup()">Plongée apnée</button>
                    <div id="popup" class="popup">
                        <div class="popup-content">
                                <div class="input-group">
                                    <label for="num-personnes">Nombre de personnes:</label>
                                    <button onclick="decrement()">-</button>
                                    <input type="number" id="num-personnes" min="1" max="10" value="1">
                                    <button onclick="increment()">+</button>
                                </div>
                                <button onclick="hidePopup()">Valider</button>
                        </div>
                    </div>
            </div>
            
        <!--Fin Page-->
        </div>

                <footer>
                    <div class="footer">
                        <div class="row">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>

                        <div class="row">
                            <ul>
                                <li><a href="#">Contacter</a></li>
                                <li><a href="#">Nos services</a></li>
                                <li><a href="#">Politique Privée</a></li>
                                <li><a href="#">Termes et conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
                <script>
      var numPersonnes = 1;
      function showPopup() {
        document.getElementById("popup").style.display = "flex";
        document.getElementById("popup2").style.display = "flex";
        document.getElementById("popup3").style.display = "flex";
        document.getElementById("popup4").style.display = "flex";
        document.getElementById("popup").style.display = "flex";
        document.getElementById("popup").style.display = "flex";
        document.getElementById("popup").style.display = "flex";
        document.getElementById("popup").style.display = "flex";
      }
      function hidePopup() {
        numPersonnes = parseInt(document.getElementById("num-personnes").value);
        // Faire quelque chose avec le nombre de personnes sélectionné ici, comme le stocker dans une variable ou l'envoyer à votre serveur.
        document.getElementById("popup").style.display = "none";
      }
      function increment() {
        var input = document.getElementById("num-personnes");
        numPersonnes = parseInt(input.value);
        numPersonnes++;
        input.value = numPersonnes.toString();
      }
      function decrement() {
        var input = document.getElementById("num-personnes");
        numPersonnes = parseInt(input.value);
        if (numPersonnes > 1) {
          numPersonnes--;
        }
        input.value = numPersonnes.toString();
      }


      let cartCount = 0;
let cartItems = [];

const cartButton = document.getElementById("cart-button");
const cartModal = document.getElementById("cart-modal");
const cartList = document

    </script>
</body>
</html>
