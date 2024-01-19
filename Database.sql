CREATE DATABASE Partiel_PHP_SQL_NWS;

USE Partiel_PHP_SQL_NWS;

CREATE TABLE Questions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    QuestionText VARCHAR(255) NOT NULL,
    ExpectedAnswer VARCHAR(255) NOT NULL,
    SuccessMessage VARCHAR(255) NOT NULL,
    FailureMessage VARCHAR(255) NOT NULL,
    CorrectAnswers INT DEFAULT 0,
    TotalAttempts INT DEFAULT 0
);