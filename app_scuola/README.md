# Applicazione scuola



## Studenti e professori

Creazione di due oggetti che descrivono le caratteristiche di due **entità**  lo *Studente*  e il *Professore*

> Risorse: <https://digilander.libero.it/informatica.davinci/slide/entita_relazioni.pdf>



**Studente**

- **Proprietà**
  - nome
  - cognome
  - classe
  - sezione
  - voti



**Professore**

- **Proprietà**
  - nome
  - cognome
  - classe
  - sezione
  - materia

### Definizione di una classe

```php+HTML
<?php
class Professore {
    //definizione delle proprietà
}
?>
```
### Aggiungere le proprietà a una classe

```php+HTML
<?php
class Professore {
    public $nome;
    public $cognome;
    public $classe;
    public $sezione;
    public $materia;
}
```



## ereditarietà

> Risorse: <https://www.html.it/pag/15521/generalizzazione-ed-ereditarieta/>

