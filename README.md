# AsciiDoc for documentation

The TestNG documentation portal now makes use of [AsciiDoctor](https://docs.asciidoctor.org/) for managing documentation.

[Here's](https://www.vogella.com/tutorials/AsciiDoc/article.html) a very good tutorial that can be referred to quickly get acquainted with AsciiDoc syntax.

This repository makes use of the [AsciiDoc Maven plugin](https://docs.asciidoctor.org/maven-tools/latest/plugin/introduction/) for translating the `.adoc` files into `html` files.

## Contributing to the documentation

* You can now make changes to the existing `.adoc` files if you are enhancing the existing documentation. To learn how to work with `.adoc` files please refer to the tutorial link mentioned above.
* To view the documentation locally, you just need to run the maven command `./mvnw clean test-compile`. This command will generate the `html` files in the `target/html` directory.

