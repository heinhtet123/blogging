pipeline {
  agent {
    docker {
      image 'hein71290/phpalpine:latest'
    }

  }
  stages {
    stage('Build') {
      steps {
        sh 'composer install'
      }
    }
    stage('Deploy') {
      steps {
        def customImage = docker.build("myfirstbuild")
      }
    }
  }
}
