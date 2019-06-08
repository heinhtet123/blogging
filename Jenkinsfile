pipeline {
  agent {
    docker {
      image 'hein71290/phpalpine'
    }
  }
  stages {
    stage('Build') {
      steps {
        sh 'composer install'
      }
    }
    stage('Test') {
      steps {

      }
    }

    stage('Deploy') {
      steps {
      }
    }
  }
  environment {
    ruby = '2.5.3'
  }
}
