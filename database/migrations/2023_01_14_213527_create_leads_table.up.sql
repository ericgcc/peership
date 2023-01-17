-- Run the migrations
CREATE TABLE IF NOT EXISTS leads
(
    LIKE people INCLUDING ALL,
    contact_language    varchar(2)  NOT NULL,
    notes   text    null,
    CONSTRAINT "FK_LANGUAGES-LEADS-contact_language" FOREIGN KEY (contact_language) REFERENCES "public".languages ("id")
) INHERITS (people);

CREATE INDEX "FK_LANGUAGES-LEADS-contact_language" ON leads(contact_language);

COMMENT ON COLUMN leads.contact_language IS 'ISO 639-1: two-letter codes';
