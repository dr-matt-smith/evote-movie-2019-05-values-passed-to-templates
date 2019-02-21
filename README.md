# evote-movie-2019-05-values-passed-to-templates

Part of the progressive Movie Voting website project at:
https://github.com/dr-matt-smith/evote-movie-2019

The project has been refactored as follows:

- create new folder `/src`

- in `/src` create a file `controllerFunctions.php` to contain functions for our actions

        - for each page create a function, that sets a `$pageTitle` variabel and requires in the templates code, e.g.
        
                ```php
                    function aboutAction()
                    {
                        $pageName = 'about';
                        require_once __DIR__ . '/../templates/about.php';
                    }
                ```
                
- in `index.php`

        - add a first line that requires once our functions script:
        
                ```php
                    require_once __DIR__ . '/../src/controllerFunctions.php';
                ```
        
        - change the actions for each case to invoke the corresponding function, e.g. for about:
        
                ```php
                    
                ```

