<?php
include('header.php')
?>

<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!--Début Page-->
    <div class="page">
        <h2 id="plongee">Plongée</h2>
        <div class="ligne">
            <div class="produit">
                <button class="presta_plongee" onclick="showPopup()">Plongée</button>
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
                <button class="presta_plongee" onclick="showPopup()">Plongée</button>
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
                <button class="presta_plongee" onclick="showPopup()">Plongée</button>
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
                <button class="presta_plongee" onclick="showPopup()">Plongée</button>
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
                <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-008-bmc-fourstroke-01-one-mountain-bike-red-01.png" alt="">
                <a href="#popup" class="button">En savoir +</a>

                <div id="popup" class="overlay">
                    <div class="popup">
                        <h2>Nom produit</h2>
                        <a href="#" class="cross">&times;</a>
                        <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-008-bmc-fourstroke-01-one-mountain-bike-red-01.png" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugit laboriosam amet in necessitatibus ipsa assumenda corrupti dolorem. Modi voluptate delectus, nihil iure ipsum aperiam eveniet, esse sint, corrupti porro
                            exercitationem tempora? Quidem iure, sapiente similique aspernatur animi dolorum illo expedita officia in, a non? Ratione autem, ducimus iusto non quo, facere unde, enim et deserunt dolorum assumenda natus cum magnam labore
                            vero quae provident expedita alias sint itaque libero nemo! Iste, nostrum delectus beatae nesciunt ullam possimus tenetur sequi.</p>
                    </div>
                </div>
            </div>
            <div class="produit">
                <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-011-bmc-fourstroke-01-lt-two-mountain-bike-brown-01.png" alt="">
                <a href="#popup" class="button">En savoir +</a>

                <div id="popup" class="overlay">
                    <div class="popup">
                        <h2>Nom produit</h2>
                        <a href="#" class="cross">&times;</a>
                        <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-011-bmc-fourstroke-01-lt-two-mountain-bike-brown-01.png" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugit laboriosam amet in necessitatibus ipsa assumenda corrupti dolorem. Modi voluptate delectus, nihil iure ipsum aperiam eveniet, esse sint, corrupti porro
                            exercitationem tempora? Quidem iure, sapiente similique aspernatur animi dolorum illo expedita officia in, a non? Ratione autem, ducimus iusto non quo, facere unde, enim et deserunt dolorum assumenda natus cum magnam labore
                            vero quae provident expedita alias sint itaque libero nemo! Iste, nostrum delectus beatae nesciunt ullam possimus tenetur sequi.</p>
                    </div>
                </div>
            </div>
            <div class="produit">
                <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-010-bmc-fourstroke-01-lt-one-mountain-bike-green-01.png" alt="">
                <a href="#popup" class="button">En savoir +</a>

                <div id="popup" class="overlay">
                    <div class="popup">
                        <h2>Nom produit</h2>
                        <a href="#" class="cross">&times;</a>
                        <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-010-bmc-fourstroke-01-lt-one-mountain-bike-green-01.png" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugit laboriosam amet in necessitatibus ipsa assumenda corrupti dolorem. Modi voluptate delectus, nihil iure ipsum aperiam eveniet, esse sint, corrupti porro
                            exercitationem tempora? Quidem iure, sapiente similique aspernatur animi dolorum illo expedita officia in, a non? Ratione autem, ducimus iusto non quo, facere unde, enim et deserunt dolorum assumenda natus cum magnam labore
                            vero quae provident expedita alias sint itaque libero nemo! Iste, nostrum delectus beatae nesciunt ullam possimus tenetur sequi.</p>
                    </div>
                </div>
            </div>
            <div class="produit">
                <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-009-bmc-fourstroke-01-three-mountain-bike-black-01.png" alt="">
                <a href="#popup" class="button">En savoir +</a>

                <div id="popup" class="overlay">
                    <div class="popup">
                        <h2>Nom produit</h2>
                        <a href="#" class="cross">&times;</a>
                        <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-009-bmc-fourstroke-01-three-mountain-bike-black-01.png" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugit laboriosam amet in necessitatibus ipsa assumenda corrupti dolorem. Modi voluptate delectus, nihil iure ipsum aperiam eveniet, esse sint, corrupti porro
                            exercitationem tempora? Quidem iure, sapiente similique aspernatur animi dolorum illo expedita officia in, a non? Ratione autem, ducimus iusto non quo, facere unde, enim et deserunt dolorum assumenda natus cum magnam labore
                            vero quae provident expedita alias sint itaque libero nemo! Iste, nostrum delectus beatae nesciunt ullam possimus tenetur sequi.</p>
                    </div>
                </div>
            </div>
            <div class="produit">
                <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-007-bmc-fourstroke-01-two-mountain-bike-grey-01.png" alt="">
                <a href="#popup" class="button">En savoir +</a>

                <div id="popup" class="overlay">
                    <div class="popup">
                        <h2>Nom produit</h2>
                        <a href="#" class="cross">&times;</a>
                        <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-007-bmc-fourstroke-01-two-mountain-bike-grey-01.png" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugit laboriosam amet in necessitatibus ipsa assumenda corrupti dolorem. Modi voluptate delectus, nihil iure ipsum aperiam eveniet, esse sint, corrupti porro
                            exercitationem tempora? Quidem iure, sapiente similique aspernatur animi dolorum illo expedita officia in, a non? Ratione autem, ducimus iusto non quo, facere unde, enim et deserunt dolorum assumenda natus cum magnam labore
                            vero quae provident expedita alias sint itaque libero nemo! Iste, nostrum delectus beatae nesciunt ullam possimus tenetur sequi.</p>
                    </div>
                </div>
            </div>
            <div class="produit">
                <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10507-003-bmc-speedfox-al-one-mountain-bike-sand-01.png" alt="">
                <a href="#popup" class="button">En savoir +</a>

                <div id="popup" class="overlay">
                    <div class="popup">
                        <h2>Nom produit</h2>
                        <a href="#" class="cross">&times;</a>
                        <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10507-003-bmc-speedfox-al-one-mountain-bike-sand-01.png" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugit laboriosam amet in necessitatibus ipsa assumenda corrupti dolorem. Modi voluptate delectus, nihil iure ipsum aperiam eveniet, esse sint, corrupti porro
                            exercitationem tempora? Quidem iure, sapiente similique aspernatur animi dolorum illo expedita officia in, a non? Ratione autem, ducimus iusto non quo, facere unde, enim et deserunt dolorum assumenda natus cum magnam labore
                            vero quae provident expedita alias sint itaque libero nemo! Iste, nostrum delectus beatae nesciunt ullam possimus tenetur sequi.</p>
                    </div>
                </div>
            </div>
            <div class="produit">
                <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-007-bmc-fourstroke-01-two-mountain-bike-grey-01.png" alt="">
                <a href="#popup" class="button">En savoir +</a>

                <div id="popup" class="overlay">
                    <div class="popup">
                        <h2>Nom produit</h2>
                        <a href="#" class="cross">&times;</a>
                        <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-007-bmc-fourstroke-01-two-mountain-bike-grey-01.png" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugit laboriosam amet in necessitatibus ipsa assumenda corrupti dolorem. Modi voluptate delectus, nihil iure ipsum aperiam eveniet, esse sint, corrupti porro
                            exercitationem tempora? Quidem iure, sapiente similique aspernatur animi dolorum illo expedita officia in, a non? Ratione autem, ducimus iusto non quo, facere unde, enim et deserunt dolorum assumenda natus cum magnam labore
                            vero quae provident expedita alias sint itaque libero nemo! Iste, nostrum delectus beatae nesciunt ullam possimus tenetur sequi.</p>
                    </div>
                </div>
            </div>
            <div class="page">
                <h2 id="gonflage">Gonflage</h2>
                <div class="ligne">
                    <div class="produit">
                        <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10507-004-bmc-speedfox-al-two-mountain-bike-green-01.png" alt="">
                        <a href="#popup" class="button">En savoir +</a>

                        <div id="popup" class="overlay">
                            <div class="popup">
                                <h2>Nom produit</h2>
                                <a href="#" class="cross">&times;</a>
                                <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10507-004-bmc-speedfox-al-two-mountain-bike-green-01.png" alt="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugit laboriosam amet in necessitatibus ipsa assumenda corrupti dolorem. Modi voluptate delectus, nihil iure ipsum aperiam eveniet, esse sint, corrupti
                                    porro exercitationem tempora? Quidem iure, sapiente similique aspernatur animi dolorum illo expedita officia in, a non? Ratione autem, ducimus iusto non quo, facere unde, enim et deserunt dolorum assumenda natus cum
                                    magnam labore vero quae provident expedita alias sint itaque libero nemo! Iste, nostrum delectus beatae nesciunt ullam possimus tenetur sequi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="produit">
                        <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-008-bmc-fourstroke-01-one-mountain-bike-red-01.png" alt="">
                        <a href="#popup" class="button">En savoir +</a>

                        <div id="popup" class="overlay">
                            <div class="popup">
                                <h2>Nom produit</h2>
                                <a href="#" class="cross">&times;</a>
                                <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-008-bmc-fourstroke-01-one-mountain-bike-red-01.png" alt="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugit laboriosam amet in necessitatibus ipsa assumenda corrupti dolorem. Modi voluptate delectus, nihil iure ipsum aperiam eveniet, esse sint, corrupti
                                    porro exercitationem tempora? Quidem iure, sapiente similique aspernatur animi dolorum illo expedita officia in, a non? Ratione autem, ducimus iusto non quo, facere unde, enim et deserunt dolorum assumenda natus cum
                                    magnam labore vero quae provident expedita alias sint itaque libero nemo! Iste, nostrum delectus beatae nesciunt ullam possimus tenetur sequi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="produit">
                        <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-011-bmc-fourstroke-01-lt-two-mountain-bike-brown-01.png" alt="">
                        <a href="#popup" class="button">En savoir +</a>

                        <div id="popup" class="overlay">
                            <div class="popup">
                                <h2>Nom produit</h2>
                                <a href="#" class="cross">&times;</a>
                                <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-011-bmc-fourstroke-01-lt-two-mountain-bike-brown-01.png" alt="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugit laboriosam amet in necessitatibus ipsa assumenda corrupti dolorem. Modi voluptate delectus, nihil iure ipsum aperiam eveniet, esse sint, corrupti
                                    porro exercitationem tempora? Quidem iure, sapiente similique aspernatur animi dolorum illo expedita officia in, a non? Ratione autem, ducimus iusto non quo, facere unde, enim et deserunt dolorum assumenda natus cum
                                    magnam labore vero quae provident expedita alias sint itaque libero nemo! Iste, nostrum delectus beatae nesciunt ullam possimus tenetur sequi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="produit">
                        <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-010-bmc-fourstroke-01-lt-one-mountain-bike-green-01.png" alt="">
                        <a href="#popup" class="button">En savoir +</a>

                        <div id="popup" class="overlay">
                            <div class="popup">
                                <h2>Nom produit</h2>
                                <a href="#" class="cross">&times;</a>
                                <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-010-bmc-fourstroke-01-lt-one-mountain-bike-green-01.png" alt="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugit laboriosam amet in necessitatibus ipsa assumenda corrupti dolorem. Modi voluptate delectus, nihil iure ipsum aperiam eveniet, esse sint, corrupti
                                    porro exercitationem tempora? Quidem iure, sapiente similique aspernatur animi dolorum illo expedita officia in, a non? Ratione autem, ducimus iusto non quo, facere unde, enim et deserunt dolorum assumenda natus cum
                                    magnam labore vero quae provident expedita alias sint itaque libero nemo! Iste, nostrum delectus beatae nesciunt ullam possimus tenetur sequi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="produit">
                        <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-009-bmc-fourstroke-01-three-mountain-bike-black-01.png" alt="">
                        <a href="#popup" class="button">En savoir +</a>

                        <div id="popup" class="overlay">
                            <div class="popup">
                                <h2>Nom produit</h2>
                                <a href="#" class="cross">&times;</a>
                                <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-009-bmc-fourstroke-01-three-mountain-bike-black-01.png" alt="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugit laboriosam amet in necessitatibus ipsa assumenda corrupti dolorem. Modi voluptate delectus, nihil iure ipsum aperiam eveniet, esse sint, corrupti
                                    porro exercitationem tempora? Quidem iure, sapiente similique aspernatur animi dolorum illo expedita officia in, a non? Ratione autem, ducimus iusto non quo, facere unde, enim et deserunt dolorum assumenda natus cum
                                    magnam labore vero quae provident expedita alias sint itaque libero nemo! Iste, nostrum delectus beatae nesciunt ullam possimus tenetur sequi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="produit">
                        <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-007-bmc-fourstroke-01-two-mountain-bike-grey-01.png" alt="">
                        <a href="#popup" class="button">En savoir +</a>

                        <div id="popup" class="overlay">
                            <div class="popup">
                                <h2>Nom produit</h2>
                                <a href="#" class="cross">&times;</a>
                                <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10503-007-bmc-fourstroke-01-two-mountain-bike-grey-01.png" alt="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugit laboriosam amet in necessitatibus ipsa assumenda corrupti dolorem. Modi voluptate delectus, nihil iure ipsum aperiam eveniet, esse sint, corrupti
                                    porro exercitationem tempora? Quidem iure, sapiente similique aspernatur animi dolorum illo expedita officia in, a non? Ratione autem, ducimus iusto non quo, facere unde, enim et deserunt dolorum assumenda natus cum
                                    magnam labore vero quae provident expedita alias sint itaque libero nemo! Iste, nostrum delectus beatae nesciunt ullam possimus tenetur sequi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="produit">
                        <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10507-003-bmc-speedfox-al-one-mountain-bike-sand-01.png" alt="">
                        <a href="#popup" class="button">En savoir +</a>

                        <div id="popup" class="overlay">
                            <div class="popup">
                                <h2>Nom produit</h2>
                                <a href="#" class="cross">&times;</a>
                                <img src="https://www.bmc-switzerland.com/media/catalog/product/cache/db486834651b8299de17894045ea7cde/b/m/bmc-22-10507-003-bmc-speedfox-al-one-mountain-bike-sand-01.png" alt="">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugit laboriosam amet in necessitatibus ipsa assumenda corrupti dolorem. Modi voluptate delectus, nihil iure ipsum aperiam eveniet, esse sint, corrupti
                                    porro exercitationem tempora? Quidem iure, sapiente similique aspernatur animi dolorum illo expedita officia in, a non? Ratione autem, ducimus iusto non quo, facere unde, enim et deserunt dolorum assumenda natus cum
                                    magnam labore vero quae provident expedita alias sint itaque libero nemo! Iste, nostrum delectus beatae nesciunt ullam possimus tenetur sequi.</p>
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
                                <li><a href="#">SAV</a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
                <script>
      var numPersonnes = 1;
      function showPopup() {
        document.getElementById("popup").style.display = "flex";
      }
      function hidePopup() {
        numPersonnes = parseInt(document.getElementById("num-personnes").value);
        // Faites quelque chose avec le nombre de personnes sélectionné ici, comme le stocker dans une variable ou l'envoyer à votre serveur.
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
