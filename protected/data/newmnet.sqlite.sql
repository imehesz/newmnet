BEGIN TRANSACTION;
CREATE TABLE feeds (created NUMERIC, deleted NUMERIC, id INTEGER PRIMARY KEY, name VARCHAR(50), url TEXT, weight NUMERIC);
COMMIT;
