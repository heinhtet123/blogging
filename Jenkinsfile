pipeline {
  agent {
    docker {
      image 'hein71290/phpalpine:latest'
    }

  }
  stages {
    stage('Build') {
      steps {
        script {
          def userInput = input(id: 'userInput', message: 'Merge to?',
              parameters: [[$class: 'ChoiceParameterDefinition', defaultValue: 'strDef', 
              description:'describing choices', name:'nameChoice', choices: "QA\nUAT\nProduction\nDevelop\nMaster"]
              ])

            println(userInput); //Use this value to branch to different logic if needed
        }
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
