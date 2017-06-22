pipeline {
    agent any
    stages{
        stage('Checkout Code'){
            steps{
                checkout scm
            }
        }
        stage ('Build Container'){
            steps {
                sh "docker stop slodzinssilprojectmasterannlcctvvwgxsbaz2ju65szboijkzjci34v4rbv4bjfukgmrveuq_php_1"
                sh "docker rm slodzinssilprojectmasterannlcctvvwgxsbaz2ju65szboijkzjci34v4rbv4bjfukgmrveuq_php_1"
                sh "docker rmi slodzinssilprojectmasterannlcctvvwgxsbaz2ju65szboijkzjci34v4rbv4bjfukgmrveuq_php -f"
                sh "docker rmi rihardslodzins/phpapp -f"
                sh "docker-compose up -d"
            } 
        }
        stage ('Test db connection'){
            steps{
                sh "composer require --dev phpunit/dbunit"
                sh "phpunit --log-junit results/phpunit/phpunit.xml -c tests/phpunit.xml"
            }
        }
        stage ('Push php image to Docker hub'){
            steps{
                sh "docker commit slodzinssilprojectmasterannlcctvvwgxsbaz2ju65szboijkzjci34v4rbv4bjfukgmrveuq_php_1 rihardslodzins/phpapp"
                sh "docker tag rihardslodzins/phpapp rihardslodzins/phpapp:latest"
                sh "docker login --username=rihardslodzins --email=rihardslodzins@gmail.com --password=Stulbieodi123"
                sh "docker push rihardslodzins/phpapp"
            }
        }
        
    }
}
