pipeline {
    agent any
    stages{
        stage('Chechando os arquivos'){
            steps{
                sh 'ls /var/www/projeto'
            } 
        }
        stage('Atualizar os arquivos'){
            steps{
                sh 'apt-get update'
            }
        }
    }
}