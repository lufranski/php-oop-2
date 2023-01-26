<?php
    $category1 = new Category ('Gatto');
    $category2 = new Category ('Cane');
    
    // $product1 = new Product ('Osso finto' , 180, 500, $category1);
    // $product2 = new Product ('Cuccia' , 400, 400, $category2);

    // $types = [
    //     new Type ('Palla', 10, 0.2, $category2, 'Giochi'),
    //     new Type ('Crocchette per gatti', 18, 0.500, $category1, 'Food'),
    //     new Type ('Collare per cani', 20, 0.200, $category2, 'Accessori'),
    //     new Type ('Cuccia', 100, 10, $category2, 'Accessori')
    // ];
    $type1 = 'Giochi';
    $type3 = 'Accessori';

    $products = [
        new Product ('Osso finto', 2, 0.300, $category1, $type1),
        new Product ('Cuccia' , 200, 20, $category2, $type3),
        new Product ('Palla', 10, 0.2, $category2, $type1)
    ];

    // echo $type1 -> getHtml();
    // echo '<br>' . $type2 -> getHtml();
?>