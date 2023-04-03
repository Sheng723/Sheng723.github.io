## Introduction
This project is a platform that allows users to create their own profile and share information about themselves with others. This website includes features like user registration and login, which allows users to securely access their accounts and create, read, update, and delete (CRUD) their own blog posts.

Once users have logged in, they can create new blog posts using a simple form interface. They can add a title, content, and other details about the post, such as tags or categories. The website also includes a feature that allows users to edit or delete their existing posts.

Once a user has created a blog post, it will be displayed on the show-blog page for other users to read and comment on. The show-blog page is a public-facing page that showcases all the blog posts created by users. This allows users to share their writing with others and receive feedback and comments on their work.

Overall, this project is a great way for individuals to showcase their creativity and share their personal stories and experiences with others. It provides a platform for self-expression and community-building, allowing users to connect with like-minded individuals who share similar interests and passions.

## Usage
1. docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
2. ./vendor/bin/sail up
3. ./vendor/bin/sail artisan migrate
4. ./vendor/bin/sail npm run dev

## Flow
1. User click on the register button located at top left corner to register, then login
2. User click on create blog button to create blog
3. User click home located at top left corner to go to public-facing page
4. User click show blogs button in middle of the page to show blogs
5. User click the cards, then will show details of the blogs.

## Screenshots of the projects:

<h5>Homepage:</h5>
<img width="909" alt="Screenshot 2023-04-02 at 11 04 56 PM" src="https://user-images.githubusercontent.com/61724961/229361471-63f6255b-9847-4541-9ea5-5a153d8f18a9.png">

<h5>Show Blog Page:</h5>
<img width="912" alt="Screenshot 2023-04-02 at 10 59 11 PM" src="https://user-images.githubusercontent.com/61724961/229361063-1cbfdcc8-410b-43f7-9c30-9044001ef74d.png">

<h5>Show Blog Details Pop up Modal:</h5>
<img width="907" alt="Screenshot 2023-04-02 at 11 05 34 PM" src="https://user-images.githubusercontent.com/61724961/229361501-739ad478-159c-4911-9417-b9dddc651dbe.png">

<h5>Admin Panel:</h5>
<img width="914" alt="Screenshot 2023-04-02 at 10 59 57 PM" src="https://user-images.githubusercontent.com/61724961/229361104-c2ed1c20-0346-4d0a-b560-61d55acd8ba8.png">


<h5>Create Blog Page:</h5>
<img width="909" alt="Screenshot 2023-04-02 at 11 06 55 PM" src="https://user-images.githubusercontent.com/61724961/229361574-cf1df08c-e185-4c36-a874-b0f8c5e5231a.png">

<h5>Edit Blog Page:</h5>
<img width="910" alt="Screenshot 2023-04-02 at 11 07 30 PM" src="https://user-images.githubusercontent.com/61724961/229361613-6a63fbd3-666c-4f66-94f5-1dbb8d8a0a7a.png">

