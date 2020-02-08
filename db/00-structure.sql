CREATE TABLE posts (
    id serial NOT NULL,
    title character varying(60) NOT NULL,
    full_text text,
    published boolean DEFAULT FALSE,
    created timestamp WITHOUT time zone NOT NULL,
    modified timestamp WITHOUT time zone NOT NULL,
    PRIMARY KEY(id)
);