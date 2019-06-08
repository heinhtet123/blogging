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
        sh 'gem install capistrano'
        sshagent(credentials: ['deploy']) {
          sh 'cap staging deploy'
        }

      }
    }
  }
}