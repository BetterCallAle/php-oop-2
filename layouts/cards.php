<?php foreach($products as $product) {
      $product->setImgPath(); 
?>
    <div class="col">
        <div class="card py-3 h-100">
            <div class="card-img text-center">
                <img src="<?php echo $product->getImgPath() ?>" alt="Immagine di <?php echo $product->name ?>">
            </div>
            <div class="card-body">
                <h5 class="text-center"><?php echo $product->name; ?></h5>
                <p><?php echo $product->description ?></p>
                <ul>
                    <li>
                        Prezzo:
                        <?php echo $product->price ?>
                        &euro;
                    </li>

                    <li>
                        Prodotto per:
                        <?php echo $product->category->name ?>
                    </li>

                    <?php if(isset($product->ingredients)) { ?>
                        <li>
                            Ingredienti:
                            <ul>
                                <?php foreach($product->ingredients as $ingredient){ ?>
                                    <li>
                                        <?php echo $ingredient; ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>

                        <li>
                            Data di scadenza: 
                            <?php echo $product->expiration_date; ?>
                        </li>

                        <li>
                            Gusto:
                            <?php echo $product->flavor; ?>
                        </li>

                        <li>
                            Peso:
                            <?php echo $product->quantity_in_gr; ?>
                            gr
                        </li>
                    <?php } else { ?>
                        <li>
                            Materiali:
                                <ul>
                                    <?php foreach($product->materials as $material){ ?>
                                        <li>
                                            <?php echo $material ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                        </li>
                        <?php } ?>
                </ul>

                <a href="#" class="btn btn-primary">Acquista ora</a>
            </div>
        </div>
    </div>

<?php } ?>