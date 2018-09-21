# SENDING MULTIPLE FILES

## CREATEING AN CONTEINER DOCKER

```bash
$ cd name_your_project/

multiplefiles$ sudo docker build .
multiplefiles$ sudo docker-compose up
```

## SENDING FILES

To send file you can access via browser, ao enviar o formulario será chamado **file.php** e ele exetura uma class **ReceiveFiles**

## RESULT OF THE SEND

```php
$f = new ReceiveFiles(); #create the object
$f->setFile($_FILES["file"]); #receiving the files
$f->runn(); #execute
```

The result is visible in console of the browser