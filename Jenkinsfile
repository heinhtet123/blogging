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
        sshagent (credentials: ['deploy']) {
          sh 'bundle exec cap staging deploy'
        }
      }
    }
  }
}
