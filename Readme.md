# Random Jokes API
</p>This repository provides a PHP-based API for generating random jokes. It allows developers to fetch a random joke from a predefined collection of jokes.</p>

## Usage

<p>To use the Random Jokes API, you can make a GET request to the provided endpoint `/JokesAPI.php` to retrieve a random joke in JSON format.</p>

### Example Request
```JavaScript
fetch("GET","JokesAPI.php")
.then(response=>response.json())
.then(response=>{
    console.log(response);
}).catch(e=>{
    console.log(e);
})
```
### Example Response

```json
{
  joke:"Why did the computer file a complaint with HR? It had a conflict with its mouse."

}
```

## Conclusion

<p>The Random Jokes API provides a simple and fun way to generate random jokes. Feel free to use it in your projects or contribute to its development. We appreciate your support and welcome any feedback or suggestions. Enjoy the laughter!</p>


## Contributing
<p>We welcome contributions to the Random Jokes API repository! If you'd like to contribute and add your own jokes or improve the existing code, follow these steps:</p>

- Fork the repository.
- Clone the forked repository to your local machine;
- Create a new branch for your feature, bug fix or adding Jokes.
- Make your changes and commit them with descriptive messages.
- Push your branch to your forked repository.
- Open a pull request to merge your changes back into the main repository.

## License
<p>This project is licensed under the MIT License. You can find more details in the LICENSE file.</p>
