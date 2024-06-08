#!/bin/bash

# Generate a 256-bit encryption key
encryptionKey=$(php -r 'echo bin2hex(random_bytes(32));')

# Store the key in an environment variable
export ENCRYPTION_KEY=$encryptionKey
