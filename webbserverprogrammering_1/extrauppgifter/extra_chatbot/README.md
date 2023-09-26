Använd nedanstående dokumentation för att skape en egen Chatbot.

---

# QuickBot: A Simple PHP Chatbot

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Directory Structure](#directory-structure)
- [Code Explanation](#code-explanation)
- [Contributing](#contributing)
- [License](#license)
  
## Overview

QuickBot is a straightforward PHP-based chatbot designed for educational purposes. It uses simple Natural Language Processing (NLP) techniques to understand user input and generate appropriate responses. QuickBot serves as an excellent introduction to NLP and chatbot development.

## Features

- Simple NLP for intent recognition
- Context-aware conversations
- Multi-language support through JSON-based corpora
- Easy customization
- Session-based context storage

## Prerequisites

- PHP 7.4 or higher
- Web server (e.g., Apache or Nginx)
- Basic understanding of PHP and HTML

## Installation

1. **Clone the Repository**

    ```bash
    git clone https://gitlab.com/hambern/quickbot.git
    ```

2. **Navigate to Project Folder**

    ```bash
    cd quickbot
    ```

3. **Set Up Web Server**

    Make sure your web server is configured to serve the QuickBot directory.

4. **Permissions**

    Set the appropriate permissions if required.

5. **Access QuickBot**

    Open your web browser and access `index.php`.

## Usage

1. **Open the Chat Interface**

    Access QuickBot through your web server.

2. **Start Chatting**

    Type your query into the input box and press Enter.

3. **Language Change (Optional)**

    To change the language, modify the `lang` query parameter in the URL (e.g., `http://quickbot?lang=es` for Spanish).

## Directory Structure

```
quickbot/
│
├── data/
│   └── corpus-en.json
│
├── src/
│   ├── nlp/
│   │   ├── IntentResolver.php
│   │   └── Tokenizer.php
│   └── QuickBot.php
│
├── templates/
│   └── default.php
│
├── index.php
└── README.md
```

## Code Explanation

- `corpus-en.json`: Contains the intents, utterances, and responses.
- `IntentResolver.php`: Responsible for intent recognition.
- `Tokenizer.php`: Tokenizes the user input.
- `QuickBot.php`: Main class that brings everything together.
- `default.php`: The default template for the front-end interface.
- `index.php`: The entry point of the application.

## Contributing

Contributions are welcome!

## License

This project is licensed under the MIT License.