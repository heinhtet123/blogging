pipeline{
  agent { node { label 'master' } }
  environment {
    REGISTRY_AUTH = credentials("docker_hub")
  }
  stages {
    stage('Build') {
      agent{
        docker {
          image 'hein71290/phpalpine:latest'
        }
      }
      steps {
        sh 'composer install'
      }
    }

    stage('Deploy') {
      steps {
        sh "docker login -u=$REGISTRY_AUTH_USR -p=$REGISTRY_AUTH_PSW"
        sh './deploy'
      }
    }
  }
}
