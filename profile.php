
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
    <title>Blog Section</title>
    
   
    <style>
    @import url('https://fonts.cdnfonts.com/css/product-sans');
  </style>
<style>
    * {
    margin: 0;
    padding: 0;
   
    box-sizing: border-box;
    font-family: 'Product Sans', sans-serif;  
}

a {
    text-decoration: none;

}

ul {
    list-style: none;
}

body {
    margin: 0;
    padding: 0;
    font-family: 'Product Sans', sans-serif;  
 
}

#blog {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 40px;
    border-bottom: 3px solid rgba(0, 0, 0, 0.05);
}

.blog-heading {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

}

.blog-heading span {
    color: #f33c3c;
    text-align: center;


}

.blog-heading h3 {
    font-size: 2.4rem;
    color: #2b2b2b;
    font-weight: 600;
    text-align: center;
}

.blog-container {
    /* display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px 0;
    flex-wrap: wrap;*/
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}

.blog-box1,
.blog-box2,
.blog-box3 {
    width: 350px;
    background-color: #ffffff;
    border: 1px solid #ececec;
    margin: 20px;

}


img {
    width: 100%;
    margin: auto;
    margin-top: 30px;
    justify-content: center;
    display: flex;

}

.blog-text {
    padding: 30px;
    display: flex;
    flex-direction: column;
}

.blog-text span {
    color: #B6D7A8;
    font-size: 0.9rem;
}

.blog-text .blog-title {
    font-size: 1.3rem;
    font-weight: 500;
    color: #272727;

}

.blog-text .blog-title :hover {
    color: #B6D7A8;
    transition: all ease 0.3s;
}

.blog-text a {
    color: #B6D7A8;
}

.blog-text a:hover {
    color: #B6D7A8;
    transition: all ease 0.3s;
}

@media(max-width:125px) {
    .blog-box {
        width: 300px;
    }
}

@media(max-width:1100px) {
    .blog-box {
        width: 70%;
    }
}

@media(max-width:550px) {
    .blog-box {
        margin: 20px 10px;
        width: 300px;
    }

    #blog {
        padding: 20px;
    }
}
</style>

</head>

<body>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="homepage.php" style="text-decoration:none"><i class="bi bi-back"> Back</i></a>
    <section id="blog">
        <div class="bolg-heading">
            
            <span>My Recent post</span>
            <h1>My Blog</h1>

        </div>
        <div class="blog-container">

            <div class="blog-box1">
                <div>
                    <img src="Dog.jpg" alt="">
                </div>
                <div class="blog-text">
                    <span>28 April 2023</span>
                    <a href="#" class="blog-title">Article About Dog</a>
                    <h3>
                        Dog Information
                    </h3>
                    <p>A dog is a mammal in the order Carnivora.

                        The history of dogs is an old tale indeed. You could say as long as there has been civilisation,
                        there have been records of humans and dogs. Dogs were domesticated from wolves around 15,000
                        years ago. New evidence suggests that dogs were first domesticated in East Asia, possibly China.
                        Over time, the dog has developed into hundreds of breeds with a great degree of variation.</p>
                    <h3>Dogs – Highly Social Animals</h3>
                    <p>Dogs, like humans, are highly social animals and this similarity in their overall behavioural
                        pattern accounts for their trainability, playfulnes and ability to fit into human households and
                        social situations. This similarity has earned dogs a unique position in the realm of
                        interspecies relationships.

                        The loyalty and devotion that dogs demonstrate as part of their natural instincts as pack
                        animals closely mimics the human idea of love and friendship, leading many dog owners to view
                        their pets as full-fledged family members.

                        The common name for the domestic dog is ‘Canis familiaris‘, a species of the dog family
                        ‘Canidae‘. The dog is generally considered the ‘first’ domesticated animal.

                        Dogs can differ in appearance, function, temperament and size. Some small dogs can weigh as
                        little as 1.5 pounds, whereas some larger dogs can weigh as much as 200 pounds.

                        Depending on the country, there are about 138 officially recognised dog breeds, categorised into
                        7 different groups.

                        Dogs fill a variety of roles in human society and are often trained as working dogs. For dogs
                        that do not have traditional jobs, a wide range of dog sports provide the opportunity to exhibit
                        their natural skills</p>
                    <h3>Dogs – Companions Across The Ages</h3>
                    <p>It is estimated that for more than 12,000 years the dog has lived with humans as a hunting
                        companion, protector and friend. A dog is one of the most popular pets in the world and has been
                        referred to as ‘mans best friend’. Whether you are poor or rich, a dog will be faithful and
                        loyal to you and love you to bits.

                        A pet dog will fit easily into family life and environment, they of course need caring for as
                        any other pet – feeding, grooming, bathing and when ill, will need a visit to the vets. Dogs
                        thrive on affection and will happily wag its tail when showered with love and attention. Dogs
                        will also sit and sulk if they get told off for doing something wrong.

                    </p>



                </div>

            </div>

            <div class="blog-box2">
                <div>
                    <img src="cat.jpg" alt="">
                </div>
                <div class="blog-text">
                    <span>28 April 2023</span>
                    <a href="#" class="blog-title">Article About Cat</a>
                    <h3>Where Do Cats Live?</h3>
                    <p>Domestic cats typically live in homes or urban areas while feral cats live in forests,
                        grasslands, tundras and wetlands, and big cats live in rainforests, deserts and in temperate
                        climate zones. Where cats live depends primarily on the species. Domestic cats live in virtually
                        every part of the world and primarily live indoors, which means that they can survive wherever
                        humans live.Domesticated cats are among the most common type of cat and are frequently found in
                        urban areas. They are similar biologically to feral cats, which have a similar body shape and
                        features as domestic cats but are considered untamed. Feral cats roam freely in many areas and
                        are quite resilient. They can survive in extreme conditions, such as desert climates, cold
                        regions and at high altitudes. Feral cats exist in many countries and live on all continents
                        except for Antarctica. Some feral cats live alongside humans and domestic cats in urban areas,
                        while others reside in remote locations. Larger cat species, such as jaguars, leopards and
                        cheetahs, are also found in a variety of habitats around the world. The snow leopard is a large
                        cat species that lives in the cold and remote peaks of Asian mountain ranges while lions and
                        cheetahs reside in desert locations in Africa and Asia.</p>
                    <h3>How Many Species of Cats Are There?</h3>
                    <p>Facebook
                        Twitter
                        Most scientists recognize 36 or 37 species of cats, depending upon how they define a species and
                        the latest knowledge of cat evolution. Some experts recognize as many as 41 species. Although
                        numerous domestic cat breeds exist, common household cats derive from a single species, called
                        Felis catus.Scientists agree that the common house cat is a single species despite being highly
                        variable in appearance. Most modern science on the classification of species focuses upon
                        biochemical or genetic data, rather than outward appearance or number of similarities between
                        creatures.

                        All cats, including the big cats, such as lions and tigers, belong to a single scientific
                        grouping, called Felidae. Within that scientific grouping, scientists determine what is a
                        species; varying scientific opinions lead to disagreements over the exact number of species in a
                        group.</p>

                </div>

            </div>

            <div class="blog-box3">
                <div>
                    <img src="bird.jpg" alt="">
                </div>
                <div class="blog-text">
                    <span>28 April 2023</span>
                    <a href="#" class="blog-title">Article About bird</a>
                    <h3>Birds Information</h3>
                    <p>The introduction of birds says that they are an organization of Aves-class warm-blooded
                        vertebrates characterized by wings, hard-shelled egg-laying, toothless beaked jaws, an increased
                        metabolic rate, a heart with four chambers, and a powerful yet light skeleton. The bird's
                        scientific name is Aves. Birds are found worldwide and vary in measurements from the bee
                        hummingbird 5.5 cm (2.2 in) to the ostrich 2.8 m (9 ft 2 in).


                        In the bird background, there are approximately ten thousand life forms, of which more than half
                        are passerine or perching birds. Birds possess feathers whose development varies by species; the
                        extinct moa and elephant birds are the only known groups with no wings.


                        Also, birds' digestive and respiratory systems are emerging for flight. Some aquatic bird
                        species, especially seabirds and some waterbirds, have adapted further for swimming purposes.


                        According to the gathered birds information, birds are a community of dinosaurs with feathered
                        theropods and are the only existing dinosaurs. Birds are ancestors of the prehistoric avialans
                        (including Archaeopteryx members) that first happened in China approximately 160 million years
                        ago. Modern birds (Neornithes) developed in the Middle to Late Cretaceous according to DNA
                        evidence and significantly differentiated from around the time of the 66 mya extinction event of
                        the Cretaceous-Paleogene, that also attacked the pterosaurs and all non-avian dinosaurs.</p>
                    <h3>Bird Classification</h3>
                    <p>In the 1676 volume Ornithologiae, the very first Bird classification was created by Francis
                        Willughby and John Ray. To devise the taxonomic bird classification scheme currently in use,
                        Carl Linnaeus updated the work in 1758. Bird species are classified in Linnaean taxonomy as the
                        biological class Aves. Aves is classified or bird classification in the dinosaur clade Theropoda
                        is done by phylogenetic taxonomy.


                        Aves and another sister group named the order Crocodilia carries the living animals from the
                        reptile clade Archosauria. Mostly during the late 1990s, including all ancestors among the most
                        likely origins of modern birds and Archaeopteryx lithographica, Aves was most widely identified
                        phylogenetically. However, in the 21st century, an earlier concept proposed by Jacques Gauthier
                        gained broad currency and is used by many scientists, including PhyloCode system adherents. Aves
                        was described by Gauthier to include only the crown category of the modern bird collection.





                    </p>

                </div>

            </div>








        </div>

    </section>
    
</body>

</html>

<?php include("footer.php");

?>

