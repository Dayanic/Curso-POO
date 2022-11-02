# ¿Por qué aprender Programación Orientada a Objetos?
* **Vas a programar más rápido**. Tener un análisis previo de lo que estás realizando te ayudará a generar código mucho más veloz
* **Dejas de ser Programador Jr.** Podrás responder preguntas como ¿Qué es encapsulamiento?, ¿Qué es Abstracción?, ¿Qué es Herencia?, ¿Qué es Polimorfismo? en futuras entrevistas de trabajo
* **Dejar de Copiar y Pegar Código**.
  
# ¿Qué resuelve la Programación Orientada a Objetos?
La programación Orientada a Objetos nace de los problemas creados por la programación estructurada y nos ayuda a resolver cierto problemas como:

* Código muy largo: A medida que un sistema va creciendo y se hace más robusta el código generado se vuelve muy extenso haciéndose difícil de leer, depurar, mantener.
* Si algo falla, todo se rompe: Ya que con la programación estructurada el código se ejecuta secuencialmente al momento de que una de esas líneas fallara todo lo demás deja de funcionar.
* Difícil de mantener.

Lecturas recomendadas
* [Programación Estructurada](https://platzi.com/clases/programacion-estructurada/)

# Paradigma Orientado a Objetos
La **Programación Orientada a Objetos** viene de una filosofía o forma de pensar que es la **Orientación a Objetos** y esto surge a partir de los problemas que necesitamos plasmar en código.

Es analizar un problema en forma de objetos para después llevarlo a código, eso es la **Orientación a Objetos**.

Un **paradigma** es una teoría que suministra la base y modelo para resolver problemas. La paradigma de Programación Orientada a Objetos se compone de 4 elementos:
* Clases
* Propiedades
* Métodos
* Objetos

Y 4 Pilares:
* Encapsulamiento
* Abstracción
* Herencia
* Polimorfismo

# Lenguajes Orientados a Objetos
**Correcciones:
En el minuto 5:06. El navegador NO interpreta el código PHP. Lo hace el servidor
Visual studio code y visual studio no es lo mismo.
Visual Studio Code, el editor de código multiplataforma de Microsoft, es uno de los preferidos por muchos desarrolladores mientras que Visual Studio permite a los desarrolladores crear sitios y aplicaciones web, así como servicios web en cualquier entorno compatible con la plataforma .NET**

Algunos de los lenguajes de programación Orientados a Objetos son:

* Java:
  - Orientado a Objetos naturalmente
  - Es muy útilizado en Android
  - Y es usado del lado del servidor o Server Side
* PHP
  - Lenguaje interpretado
  - Pensado para la Web
* Python
  - Diseñado para ser fácil de usar
  - Múltiples usos: Web, Server Side, Análisis de Datos, Machine Learning, etc
* Javascript
  - Lenguaje interpretado
  - Orientado a Objetos pero basado en prototipos
  - Pensado para la Web
* C#
* Ruby
* Kotlin

# Diagramas de Modelado
**OMT**: Object Modeling Techniques. Es una metodología para el análisis orientado a objetos.

**UML**: Unified Modeling Language o Lenguaje de Modelado Unificado. Tomó las bases y técnicas de OMT unificándolas. Tenemos más opciones de diagramas como lo son Clases, Casos de Uso, Objetos, Actividades, Iteración, Estados, Implementación.

# Qué es UML
Como ya viste UML significa Unified Modeling Language el cual es un lenguaje estándar de modelado de sistemas orientados a objetos.
![](https://static.platzi.com/media/user_upload/220px-UML_logo.svg-ffd3a6a7-ac1d-43df-8648-265767507c9a.jpg)

Esto significa que tendremos una manera gráfica de representar una situación, justo como hemos venido viendo. A continuación te voy a presentar los elementos que puedes utilizar para hacer estas representaciones.

Las **clases** se representan así:
![](https://static.platzi.com/media/user_upload/clase-1897e6cf-84b3-4432-926b-aff4fc4db122.jpg)

En la parte superior se colocan los atributos o propiedades, y debajo las operaciones de la clase. Notarás que el primer caracter con el que empiezan es un símbolo. Este denotará la visibilidad del atributo o método, esto es un término que tiene que ver con Encapsulamiento y veremos más adelante a detalle.

Estos son los niveles de **visibilidad** que puedes tener:

- private
+ public
# protected
~ default

Una forma de representar las relaciones que tendrá un elemento con otro es a través de las flechas en UML, y aquí tenemos varios tipos, estos son los más comunes:

## **Asociación**
![](https://static.platzi.com/media/user_upload/associacion-d2e1b691-b6e9-4854-85e2-d3ffdf0a9049.jpg)

Como su nombre lo dice, notarás que cada vez que esté referenciada este tipo de flecha significará que ese elemento contiene al otro en su definición. La flecha apuntará hacia la dependencia.
![](https://static.platzi.com/media/user_upload/uml-relacion-asociacion-99b916c6-1f80-4b61-889a-ebf6e74f4f23.jpg)

Con esto vemos que la ClaseA está asociada y depende de la ClaseB.

## **Herencia**
![](https://static.platzi.com/media/user_upload/herencia-2eb98d5e-bcad-4162-b236-aa87eba20e76.jpg)

Siempre que veamos este tipo de flecha se estará expresando la herencia.
La dirección de la flecha irá desde el hijo hasta el padre.

![](https://static.platzi.com/media/user_upload/herencia-clases-53cb3117-def7-433f-adc5-4ad183d6b5e7.jpg)

Con esto vemos que la ClaseB hereda de la ClaseA

## **Agregación**

![](https://static.platzi.com/media/user_upload/agregacion-6489d946-cc06-4e3c-a976-f6435531b4f2.jpg)

Este se parece a la asociación en que un elemento dependerá del otro, pero en este caso será: Un elemento dependerá de muchos otros. Aquí tomamos como referencia la multiplicidad del elemento. Lo que comúnmente conocerías en Bases de Datos como Relaciones uno a muchos.

![](https://static.platzi.com/media/user_upload/uml-relacion-agregacion-adb20be8-d6c2-41d1-b002-2cfa37639240.jpg)

Con esto decimos que la ClaseA contiene varios elementos de la ClaseB. Estos últimos son comúnmente representados con listas o colecciones de datos.

## **Composición**
![](https://static.platzi.com/media/user_upload/composicion-1da1dd19-6925-42d9-9727-7fd8cb031b0c.jpg)

Este es similar al anterior solo que su relación es totalmente compenetrada de tal modo que conceptualmente una de estas clases no podría vivir si no existiera la otra.
![](https://static.platzi.com/media/user_upload/uml-relacion-composicion-2d4cb1fa-5422-44e3-849b-3a3e2d276733.jpg)

Con esto terminamos nuestro primer módulo. Vamos al siguiente para entender cómo podemos hacer un análisis y utilizar estos elementos para construir nuestro diagrama de clases de Uber.

# Objetos
Los Objetos son aquellos que tienen propiedades y comportamientos, también serán sustantivos.
* Pueden ser Físicos o Conceptuales

Las **Propiedades** también pueden llamarse atributos y estos también serán sustantivos. Algunos atributos o propiedades son nombre, tamaño, forma, estado, etc. Son todas las características del objeto.

Los **Comportamientos** serán todas las operaciones que el objeto puede hacer, suelen ser verbos o sustantivos y verbo. Algunos ejemplos pueden ser que el usuario pueda hacer login y logout.

# Abstracción y Clases
Una **Clase** es el modelo por el cual nuestros objetos se van a construir y nos van a permitir generar más objetos.

Analizamos Objetos para crear **Clases**. Las Clases son los modelos sobres los cuales construiremos nuestros objetos.

**Abstracción** es cuando separamos los datos de un objeto para generar un molde.

# Modularidad
La **modularidad** va muy relacionada con las clases y es un principio de la Programación Orientado a Objetos y va de la mano con el Diseño Modular que significa dividir un sistema en partes pequeñas y estas serán nuestros módulos pudiendo funcionar de manera independiente.

La **modularidad** de nuestro código nos va a permitir

* Reutilizar
* Evitar colapsos
* Hacer nuestro código más mantenible
* Legibilidad
* Resolución rápida de problemas

Una buena práctica es separando las clases en archivos diferentes.

# ¿Qué es la herencia?
**Don’t repeat yourself** es una filosofía que promueve la reducción de duplicación en programación, esto nos va a inculcar que no tengamos líneas de código duplicadas.

Toda pieza de información nunca debería ser duplicada debido a que incrementa la dificultad en los cambios y evolución

La herencia nos permite crear nuevas clases a partir de otras, se basa en modelos y conceptos de la vida real. También tenemos una jerarquía de **padre e hijo**.

# Objetos, método constructor y su sintaxis en código
Los **objetos** nos ayudan a crear instancia de una clase, el objeto es el resultado de lo que modelamos, de los parámetros declarados y usaremos los objetos para que nuestras clases cobren vida.

Los **métodos constructores** dan un estado inicial al objeto y podemos añadirle algunos datos al objeto mediante estos métodos. Los atributos o elementos que pasemos a través del constructor serán los datos mínimos que necesita el objeto para que pueda vivir.

# Encapsulamiento
El **Encapsulamiento** es hacer que un dato sea inviolable, inalterable cuando se le asigne un modificador de acceso.

Para ocultar datos se pueden utilizar los modificadores de acceso:
* Public: A estos datos pueden acceder todas las clases.
* Protected: A estos datos pueden acceder las clases, paquetes y subclases (herencia o clases hijas).
* Default: A estos datos pueden acceder las clases y paquetes.
* Private: A estos datos solo pueden acceder las clases.