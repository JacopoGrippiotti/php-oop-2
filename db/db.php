<?php 
   
   include_once __DIR__ . '/../classes/Category.php ';
   include_once __DIR__ . '/../classes/E_commerce_product.php';

   $textSample = 'Ratione minima eius nobis debitis officia? Commodi cumque pariatur nisi natus quis totam expedita aliquid voluptates? Cupiditate, non! Ullam placeat atque quia distinctio dolores?
                  Aliquid omnis molestiae rem. Error asperiores, dolorum cumque vel autem nobis sed est ratione blanditiis eligendi ut iusto perferendis porro iste ipsam temporibus officia possimus molestias reprehenderit suscipit. Perspiciatis, voluptas.
                  Cupiditate odit vitae quia cum, laborum modi sint, aut harum voluptatibus, earum esse debitis! Ex facilis nostrum cum aperiam nihil perferendis magni esse aliquam placeat eveniet, quos explicabo deserunt quae?
                  Quam maiores accusantium vero soluta aut possimus! Dolorem voluptate magnam vero soluta, quis expedita minus odit error praesentium, doloremque cupiditate magni quo corrupti beatae. Blanditiis vitae delectus corrupti ut accusantium.
                  Quo ex porro nobis dolorem nesciunt esse voluptatem. Rem architecto mollitia labore ex aperiam necessitatibus quisquam quibusdam veniam velit, incidunt magni doloremque. Quam fugiat ab labore numquam exercitationem accusamus voluptatum.
                  Itaque dolorum similique, optio consequatur necessitatibus ab cupiditate maxime architecto quos tempore laudantium distinctio ducimus expedita ut porro delectus eaque eius. Accusantium nobis deleniti ratione ducimus eius nostrum distinctio? Aperiam?
                  Obcaecati doloremque odit corporis distinctio quia laudantium voluptatem? Soluta necessitatibus, culpa, expedita eius alias exercitationem deserunt magni nesciunt repellat tenetur voluptate? Officiis repellendus nemo est ipsam quaerat, saepe labore voluptates?
                  Nisi dolor ab accusamus accusantium in eligendi eaque praesentium quas, molestiae omnis quos? Laudantium reprehenderit aspernatur, dolores tenetur omnis fugiat in odit recusandae error consequuntur, delectus, sapiente ab iste suscipit!
                  Rerum itaque voluptate doloremque illum beatae nulla praesentium rem, temporibus amet. Vitae dolorem architecto laborum accusamus laudantium, officiis tempora saepe fugit exercitationem praesentium harum impedit similique omnis delectus, aperiam autem?
                  Dolorum rerum at nulla error dolores rem vel amet dolore. In architecto iure officia perferendis magnam, odit doloremque enim repudiandae alias delectus, necessitatibus quo laborum fugiat inventore sunt nobis tempora!
                  Ullam neque aliquid, illo pariatur consequuntur ipsam rerum ducimus, excepturi iste voluptatibus asperiores sint omnis enim. Quam sit impedit vero ea nisi quibusdam quod. Adipisci sapiente reiciendis accusantium at cumque!
                  Tempore voluptatum asperiores distinctio natus laudantium deleniti ut recusandae tenetur error odio animi, tempora beatae architecto delectus officiis expedita nostrum ad quas corporis. Similique quidem aspernatur qui nam inventore vitae.
                  Temporibus, minima doloribus? Neque est harum culpa aspernatur asperiores, delectus ut debitis tempora accusamus dicta, laboriosam quidem? Autem omnis reiciendis consequuntur doloremque eligendi, porro voluptatibus ullam quae rem neque. Eligendi!
                  Vero dolor cum, maxime libero autem cumque omnis repellendus quia fuga, voluptatem, reiciendis quam porro esse at illum dolores obcaecati sunt! Iste nam sit, distinctio vero labore delectus excepturi quia.
                  Magnam minus iure ipsum deleniti nesciunt consequatur? Incidunt quis porro amet perspiciatis natus eligendi iusto aspernatur voluptas quibusdam laborum? A totam, necessitatibus ducimus deleniti aut at hic nobis ipsa dolor.';

   $eCommerceProductsForDogs=[
    new EcommerceProduct('bacon biscuits',new Dog,'food',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('dog bed',new Dog,'accessories',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('digestive kibble',new Dog,'food',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('dry shampoo',new Dog,'wellness',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('omega 3 supplement',new Dog,'wellness',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('bones',new Dog,'chewing',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('dog carrier',new Dog,'accessories',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('muzzle',new Dog,'accessories',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('collar',new Dog,'accessories',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('dog harness',new Dog,'accessories',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('dry kibble salmon',new Dog,'food',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('wet food chicken',new Dog,'food',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('wet food beef',new Dog,'food',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample)
   ];

   $eCommerceProductsForCats=[
    new EcommerceProduct('tuna biscuits',new Cat,'food',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('scratching post',new Cat,'accessories',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('gushing fountain',new Cat,'accessories',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('litter',new Cat,'accessories',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('cat Carrier',new Cat,'accessories',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('chicken dry food',new Cat,'food',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('hand cuddle',new Cat,'games',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('feather wand',new Cat,'games',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('rebus game',new Cat,'games',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('relaxing oil',new Cat,'wellness',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('wipes for eyes',new Cat,'wellness',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
    new EcommerceProduct('l-lysine supplement',new Cat,'wellness',14.50,'./images/okeykat-w6elADh_jww-unsplash.jpg',$textSample),
   ];
?>