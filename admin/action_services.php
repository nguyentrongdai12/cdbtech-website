<?php
    include_once("../controllers/dbclass.php");
    if (isset($_POST['icon'])) {
        if (!isset($_POST['autoid_old']))
        {
            $icon = $_POST['icon'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $sql = "INSERT INTO services (icon, title, description) VALUES ( '".$icon."' , N'".$title."' , N'".$description."' )";
            $dbclass = new dbclass();
            if ($dbclass->query($sql)) {
                header("Location: index.php?pages=services_all");   
            }
            else {
                echo "<h1>Đã xảy ra lỗi trong quá trình thêm dịch vụ, vui lòng thử lại ! <a href='index.php?page=services_all'>Trở về</a></h1>";
            }
        }
        else 
        {
            $autoid_old =  $_POST['autoid_old'];
            $icon = $_POST['icon'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $sql = "UPDATE services SET icon = '".$icon."', title =  N'".$title."', description = N'".$description."' WHERE autoid = '".$autoid_old."'";
            $dbclass = new dbclass();
            if ($dbclass->query($sql)) {
                header("Location: index.php?pages=services_all");   
            }
            else {
                echo "<h1>Đã xảy ra lỗi trong quá trình chỉnh sửa dịch vụ, vui lòng thử lại ! <a href='index.php?page=services_all'>Trở về</a></h1>";
            }
        }        
    }
    if (isset($_GET['delete']))
    {
        $sql = "DELETE FROM services WHERE autoid = '".$_GET['delete']."'";
        $dbclass = new dbclass();
        if ($dbclass->query($sql)) {
            header("Location: index.php?pages=services_all");   
        }
        else {
            echo "<h1>Đã xảy ra lỗi trong quá trình xóa dịch vụ, vui lòng thử lại ! <a href='index.php?page=services_all'>Trở về</a></h1>";
        }
    }
    if (isset($_GET['edit']))
    {
        $autoid = $_GET['edit'];
        $dbclass = new dbclass();
        $rs_services = $dbclass->get_rs("SELECT * FROM services WHERE autoid = '".$autoid."'");        
        ?>
            <!DOCTYPE html>
            <html lang="en">
                <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="">
                <meta name="author" content="">

                <title>Sửa dịch vụ</title>

                <!-- Custom fonts for this template-->
                <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
                <link
                    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
                    rel="stylesheet">

                <!-- Custom styles for this template-->
                <link href="css/sb-admin-2.css" rel="stylesheet">
                </head>
                <body>
                    <style>
                        #container {
                            width: 1000px;
                            margin: 20px auto;
                        }
                        .ck-editor__editable[role="textbox"] {
                            /* editing area */
                            min-height: 200px;
                        }
                        .ck-content .image {
                            /* block images */
                            max-width: 80%;
                            margin: 20px auto;
                        }
                    </style>
                    <div class="card shadow mb-4">
                     <div class="card-header py-3">
                    <form class="user" action="save_services.php" method="post">
                        <div class="form-group row">
                            <?php
                                while ($rs_service = $rs_services->fetch_assoc())
                                {
                            ?>
                                <h2>Dịch vụ :<?php echo $rs_service['title']; ?></h2>
                                <h2>ID:</h2>
                                <input type="text" class="form-control " id="autoid" name="autoid" value="<?php echo $rs_service['autoid'];?>" readonly >
                                    <div class="col-4">    
                                        </br>             
                                        <label>Ảnh 1 : 
                                            <input type="file" name="image1" accept="image/png, image/gif, image/jpeg" />
                                        </label>
                                    </div>  
                                    <div class="col-4">    
                                        </br>  
                                        <label>Ảnh 2 : 
                                            <input type="file" name="image2" accept="image/png, image/gif, image/jpeg" />
                                        </label>   
                                    </div>  
                                    <div class="col-4"> 
                                        </br>   
                                        <label>Ảnh 2 : 
                                            <input type="file" name="image3" accept="image/png, image/gif, image/jpeg" />
                                        </label>  
                                </div>
                                <h2>Tóm tắt:</h2>
                                <textarea type="text" class="form-control " id="editor" name="description2"><?php echo $rs_service['description2'];?></textarea>
                                <h2>Nội dung:</h2>
                                <textarea type="text" class="form-control " id="editor2" name="content"><?php echo $rs_service['content'];?></textarea>
                                <h2>Liên kết:</h2>
                                <input type="text" class="form-control " id="link" name="link" value="<?php echo $rs_service['link'];?>">
                                <input type="submit" value="Cập nhật" class="btn btn-primary btn-user">
                                <a href="http://localhost/cdbtech-website/admin/index.php?pages=services_all" class="btn btn-secondary btn-user">Trở về</a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </form>
                    </div></div>
                    <!--
                        The "super-build" of CKEditor 5 served via CDN contains a large set of plugins and multiple editor types.
                        See https://ckeditor.com/docs/ckeditor5/latest/installation/getting-started/quick-start.html#running-a-full-featured-editor-from-cdn
                    -->
                    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/super-build/ckeditor.js"></script>
                    <!--
                        Uncomment to load the Spanish translation
                        <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/super-build/translations/es.js"></script>
                    -->
                    <script>
                        // This sample still does not showcase all CKEditor 5 features (!)
                        // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
                        CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
                            // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
                            toolbar: {
                                items: [
                                    'exportPDF','exportWord', '|',
                                    'findAndReplace', 'selectAll', '|',
                                    'heading', '|',
                                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                                    'bulletedList', 'numberedList', 'todoList', '|',
                                    'outdent', 'indent', '|',
                                    'undo', 'redo',
                                    '-',
                                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                                    'alignment', '|',
                                    'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                                    'textPartLanguage', '|',
                                    'sourceEditing'
                                ],
                                shouldNotGroupWhenFull: true
                            },
                            // Changing the language of the interface requires loading the language file using the <script> tag.
                            // language: 'es',
                            list: {
                                properties: {
                                    styles: true,
                                    startIndex: true,
                                    reversed: true
                                }
                            },
                            // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
                            heading: {
                                options: [
                                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                                ]
                            },
                            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
                            placeholder: 'Welcome to CKEditor 5!',
                            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
                            fontFamily: {
                                options: [
                                    'default',
                                    'Arial, Helvetica, sans-serif',
                                    'Courier New, Courier, monospace',
                                    'Georgia, serif',
                                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                                    'Tahoma, Geneva, sans-serif',
                                    'Times New Roman, Times, serif',
                                    'Trebuchet MS, Helvetica, sans-serif',
                                    'Verdana, Geneva, sans-serif'
                                ],
                                supportAllValues: true
                            },
                            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
                            fontSize: {
                                options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                                supportAllValues: true
                            },
                            // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
                            // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
                            htmlSupport: {
                                allow: [
                                    {
                                        name: /.*/,
                                        attributes: true,
                                        classes: true,
                                        styles: true
                                    }
                                ]
                            },
                            // Be careful with enabling previews
                            // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
                            htmlEmbed: {
                                showPreviews: true
                            },
                            // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
                            link: {
                                decorators: {
                                    addTargetToExternalLinks: true,
                                    defaultProtocol: 'https://',
                                    toggleDownloadable: {
                                        mode: 'manual',
                                        label: 'Downloadable',
                                        attributes: {
                                            download: 'file'
                                        }
                                    }
                                }
                            },
                            // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
                            mention: {
                                feeds: [
                                    {
                                        marker: '@',
                                        feed: [
                                            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                            '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                            '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                            '@sugar', '@sweet', '@topping', '@wafer'
                                        ],
                                        minimumCharacters: 1
                                    }
                                ]
                            },
                            // The "super-build" contains more premium features that require additional configuration, disable them below.
                            // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
                            removePlugins: [
                                // These two are commercial, but you can try them out without registering to a trial.
                                // 'ExportPdf',
                                // 'ExportWord',
                                'CKBox',
                                'CKFinder',
                                'EasyImage',
                                // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                                // Storing images as Base64 is usually a very bad idea.
                                // Replace it on production website with other solutions:
                                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                                // 'Base64UploadAdapter',
                                'RealTimeCollaborativeComments',
                                'RealTimeCollaborativeTrackChanges',
                                'RealTimeCollaborativeRevisionHistory',
                                'PresenceList',
                                'Comments',
                                'TrackChanges',
                                'TrackChangesData',
                                'RevisionHistory',
                                'Pagination',
                                'WProofreader',
                                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                                // from a local file system (file://) - load this site via HTTP server if you enable MathType.
                                'MathType',
                                // The following features are part of the Productivity Pack and require additional license.
                                'SlashCommand',
                                'Template',
                                'DocumentOutline',
                                'FormatPainter',
                                'TableOfContents'
                            ]
                        });
                    </script>
                    <script>
                        // This sample still does not showcase all CKEditor 5 features (!)
                        // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
                        CKEDITOR.ClassicEditor.create(document.getElementById("editor2"), {
                            // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
                            toolbar: {
                                items: [
                                    'exportPDF','exportWord', '|',
                                    'findAndReplace', 'selectAll', '|',
                                    'heading', '|',
                                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                                    'bulletedList', 'numberedList', 'todoList', '|',
                                    'outdent', 'indent', '|',
                                    'undo', 'redo',
                                    '-',
                                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                                    'alignment', '|',
                                    'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                                    'textPartLanguage', '|',
                                    'sourceEditing'
                                ],
                                shouldNotGroupWhenFull: true
                            },
                            // Changing the language of the interface requires loading the language file using the <script> tag.
                            // language: 'es',
                            list: {
                                properties: {
                                    styles: true,
                                    startIndex: true,
                                    reversed: true
                                }
                            },
                            // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
                            heading: {
                                options: [
                                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                                ]
                            },
                            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
                            placeholder: 'Welcome to CKEditor 5!',
                            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
                            fontFamily: {
                                options: [
                                    'default',
                                    'Arial, Helvetica, sans-serif',
                                    'Courier New, Courier, monospace',
                                    'Georgia, serif',
                                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                                    'Tahoma, Geneva, sans-serif',
                                    'Times New Roman, Times, serif',
                                    'Trebuchet MS, Helvetica, sans-serif',
                                    'Verdana, Geneva, sans-serif'
                                ],
                                supportAllValues: true
                            },
                            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
                            fontSize: {
                                options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                                supportAllValues: true
                            },
                            // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
                            // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
                            htmlSupport: {
                                allow: [
                                    {
                                        name: /.*/,
                                        attributes: true,
                                        classes: true,
                                        styles: true
                                    }
                                ]
                            },
                            // Be careful with enabling previews
                            // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
                            htmlEmbed: {
                                showPreviews: true
                            },
                            // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
                            link: {
                                decorators: {
                                    addTargetToExternalLinks: true,
                                    defaultProtocol: 'https://',
                                    toggleDownloadable: {
                                        mode: 'manual',
                                        label: 'Downloadable',
                                        attributes: {
                                            download: 'file'
                                        }
                                    }
                                }
                            },
                            // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
                            mention: {
                                feeds: [
                                    {
                                        marker: '@',
                                        feed: [
                                            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                            '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                            '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                            '@sugar', '@sweet', '@topping', '@wafer'
                                        ],
                                        minimumCharacters: 1
                                    }
                                ]
                            },
                            // The "super-build" contains more premium features that require additional configuration, disable them below.
                            // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
                            removePlugins: [
                                // These two are commercial, but you can try them out without registering to a trial.
                                // 'ExportPdf',
                                // 'ExportWord',
                                'CKBox',
                                'CKFinder',
                                'EasyImage',
                                // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                                // Storing images as Base64 is usually a very bad idea.
                                // Replace it on production website with other solutions:
                                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                                // 'Base64UploadAdapter',
                                'RealTimeCollaborativeComments',
                                'RealTimeCollaborativeTrackChanges',
                                'RealTimeCollaborativeRevisionHistory',
                                'PresenceList',
                                'Comments',
                                'TrackChanges',
                                'TrackChangesData',
                                'RevisionHistory',
                                'Pagination',
                                'WProofreader',
                                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                                // from a local file system (file://) - load this site via HTTP server if you enable MathType.
                                'MathType',
                                // The following features are part of the Productivity Pack and require additional license.
                                'SlashCommand',
                                'Template',
                                'DocumentOutline',
                                'FormatPainter',
                                'TableOfContents'
                            ]
                        });
                    </script>
                </body>
            </html>
        <?php
    }
?>