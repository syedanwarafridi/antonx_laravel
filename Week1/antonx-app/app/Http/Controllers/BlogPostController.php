<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{

    protected $posts = [
        [
            'id' => 1,
            'title' => 'Exploring the Wonders of Nature',
            'content' => 'In this blog post, we will embark on an incredible journey to explore the vast landscapes, lush forests, and mesmerizing creatures that inhabit our planet. From the towering mountains to the tranquil lakes, nature has a way of captivating our senses and igniting our curiosity. Join us as we delve into the beauty and mysteries of the natural world. Let\'s witness the breathtaking sunsets and the delicate dance of butterflies in their natural habitat.',
            'excerpt' => 'Join us as we explore the beauty and mysteries of the natural world.',
        ],
        [
            'id' => 2,
            'title' => 'The Art of Culinary Delights',
            'content' => 'Indulge in a gastronomic adventure as we uncover the secrets behind creating exquisite dishes that tantalize the taste buds and delight the senses. From mastering the art of presentation to experimenting with unique flavors, the culinary world offers a canvas for creativity and innovation. Savor the flavors, and join us on a journey to discover the artistry behind culinary delights. Experience the joy of crafting a masterpiece plate that not only satisfies hunger but also ignites a symphony of flavors.',
            'excerpt' => 'Savor the flavors and discover the artistry behind exquisite dishes.',
        ],
        [
            'id' => 3,
            'title' => 'Mastering the Craft of Photography',
            'content' => 'Capture fleeting moments and create timeless memories through the lens of a camera. Photography is a powerful medium that allows us to freeze time, evoke emotions, and tell stories without words. In this blog post, we\'ll explore the techniques and skills needed to capture the essence of a moment and learn the art of visual storytelling through photography. From candid portraits to breathtaking landscapes, discover how the play of light and shadow can transform a simple scene into a work of art.',
            'excerpt' => 'Unleash your creativity and learn the art of visual storytelling.',
        ],
        [
            'id' => 4,
            'title' => 'A Journey Through Ancient History',
            'content' => 'Travel back in time and immerse yourself in the fascinating civilizations that have shaped our world. From the grand pyramids of Egypt to the intricate architecture of ancient Greece, history is a treasure trove of knowledge and inspiration. Embark on an educational and awe-inspiring journey through the annals of time to better understand our shared human heritage. Walk in the footsteps of ancient rulers, philosophers, and artisans, and uncover the stories of triumphs, challenges, and the resilience of humanity.',
            'excerpt' => 'Embark on an educational and awe-inspiring journey through history.',
        ],
        [
            'id' => 5,
            'title' => 'Balancing Work and Passion: The Modern Dilemma',
            'content' => 'In today\'s fast-paced world, finding the equilibrium between pursuing our passions and excelling in our careers can be a daunting challenge. In this blog post, we\'ll delve into strategies for navigating the complexities of modern life. Discover how to maintain your drive, focus, and well-being while navigating the intricacies of balancing work and personal aspirations. Explore the stories of individuals who have managed to find harmony between their professional pursuits and personal passions, and gain insights into fostering a fulfilling and balanced lifestyle.',
            'excerpt' => 'Navigate the challenges of pursuing your passions while excelling in your career.',
        ],
    ];        


    public function blog_post()
    {   
        // Loop through the dummyPosts array and do whatever you want with the data
        // foreach ($dummyPosts as $post) {
        //     // For example, you can print the title of each post
        //     echo "Title: " . $post['title'] . "\n";
        // }
        return view('welcome', ['posts' => $this->posts]);
    }

    public function show($id)
    {         
        $post = collect($this->posts)->firstWhere('id', $id);

        if (!$post) {
            abort(404); // Show a 404 error if the post is not found
        }

        return view('details', ['post' => $post]);
    }
}
