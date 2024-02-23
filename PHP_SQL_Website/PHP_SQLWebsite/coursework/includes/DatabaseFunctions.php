<?php

##REUSABLE QUERY FUNCTION##


function query($pdo, $sql, $parameters = []) {
	$query = $pdo->prepare($sql);
	$query->execute($parameters);
	return $query;
}

##Question FUNCTIONS##

function getQuestion($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM question WHERE id = :id', $parameters);
	return $query->fetch();
}

function totalQuestions($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM question');
	$row = $query->fetch();
	return $row[0];
}

function allQuestions($pdo) {
	$questions = query($pdo, 'SELECT question.id, questiontext, `name`, email, moduleName FROM question
	INNER JOIN author ON authorid  = author.id
	INNER JOIN module ON moduleid = module.id');
	return $questions->fetchAll();
}

function insertQuestion($pdo, $questiontext, $authorid, $moduleid) {
	$query = 'INSERT INTO question (questiontext, questiondate, authorid, moduleid)
	VALUES (:questiontext, CURDATE(), :authorid, :moduleid)';
	$parameters = [':questiontext' => $questiontext, ':authorid' => $authorid, ':moduleid' => $moduleid];
	query($pdo, $query, $parameters);
}

function updateQuestion($pdo, $questionId, $questiontext) {
	$query = 'UPDATE question SET questiontext = :questiontext WHERE id = :id';
	$parameters = [':questiontext' => $questiontext, ':id' => $questionId];
	query($pdo, $query, $parameters);
}

function deleteQuestion($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM question WHERE id = :id', $parameters);
}


##AUTHOR FUNCTIONS##

function allAuthors($pdo) {
	$authors = query($pdo, 'SELECT * FROM author');
	return $authors->fetchAll();
}


function getAuthor($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM author WHERE id = :id', $parameters);
	return $query->fetch();
}

function totalAuthors($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM author');
	$row = $query->fetch();
	return $row[0];
}

function insertAuthor($pdo, $author) {
	$query = 'INSERT INTO author (name)
	VALUES (:name )';
	$parameters = [':name' => $author ];
	query($pdo, $query, $parameters);
}

function updateAuthor($pdo, $authorid, $author ) {
	$query = 'UPDATE author SET name = :name  WHERE id = :id';
	$parameters = [':name' => $author, ':id' => $authorid];
	query($pdo, $query, $parameters);
}

function deleteAuthor($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM author WHERE id = :id', $parameters);
}


##Modules FUNCTIONS##

function allModules($pdo) {
	$modules = query($pdo, 'SELECT * FROM module');
	return $modules->fetchAll();
}

function getModule($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM module WHERE id = :id', $parameters);
	return $query->fetch();
}

function totalModules($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM module');
	$row = $query->fetch();
	return $row[0];
}

function insertModule($pdo, $moduleName) {
	$query = 'INSERT INTO module (moduleName)
	VALUES (:moduleName )';
	$parameters = [':moduleName' => $moduleName ];
	query($pdo, $query, $parameters);
}

function updateModule($pdo, $moduleid, $moduleName) {
	$query = 'UPDATE module SET moduleName = :moduleName WHERE id = :id';
	$parameters = [':moduleName' => $moduleName, ':id' => $moduleid];
	query($pdo, $query, $parameters);
}

function deleteModule($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM module WHERE id = :id', $parameters);
}

