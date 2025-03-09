#!/bin/bash

# Install Zsh and other dependencies
# apt-get update && apt-get install -y zsh

# Install oh-my-zsh
# sh -c "$(curl -fsSL https://raw.github.com/ohmyzsh/ohmyzsh/master/tools/install.sh)"

# Install Powerlevel10k theme
# git clone --depth=1 https://github.com/romkatv/powerlevel10k.git ${ZSH_CUSTOM:-~/.oh-my-zsh/custom}/themes/powerlevel10k

# Install zsh-autosuggestions plugin
# git clone https://github.com/zsh-users/zsh-autosuggestions ${ZSH_CUSTOM:-~/.oh-my-zsh/custom}/plugins/zsh-autosuggestions

# Install zsh-syntax-highlighting plugin
# git clone https://github.com/zsh-users/zsh-syntax-highlighting.git ${ZSH_CUSTOM:-~/.oh-my-zsh/custom}/plugins/zsh-syntax-highlighting

# Set Zsh theme and plugins in .zshrc
# echo "ZSH_THEME=\"powerlevel10k/powerlevel10k\"" >> ~/.zshrc
# echo "plugins=(git zsh-autosuggestions zsh-syntax-highlighting)" >> ~/.zshrc

# Set Zsh as the default shell for the mishu user
# chsh -s $(which zsh) mishu

# Re-source .zshrc to apply changes immediately
# source ~/.zshrc
