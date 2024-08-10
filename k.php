<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CKEditor 5 - Quick start CDN</title>
        <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
    </head>
    <body>
        <div id="content">
            <p>Hello from CKEditor 5!</p>
        </div>

        <script type="importmap">
            {
                "imports": {
                    "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
                    "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
                }
            }
        </script>

        <script type="module">
            import {
                ClassicEditor,
                Essentials,
                Bold,
                Italic,
                Font,
                Paragraph,
                Table,
                TableToolbar
            } from 'ckeditor5';

            ClassicEditor
                .create( document.querySelector( '#content' ), {
                    plugins: [ Essentials, Bold, Italic, Font, Paragraph, Table, TableToolbar ],
                    toolbar: {
                        items: [
                            'undo', 'redo', '|', 'bold', 'italic', '|',
                            'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                            'insertTable', 'tableColumn', 'tableRow', 'mergeTableCells'
                        ]
                    }
                } )
                .then( editor => {
                    console.log( 'Editor was initialized', editor );
                } )
                .catch( error => {
                    console.error( 'There was a problem initializing the editor.', error );
                } );
        </script>
    </body>
</html>
