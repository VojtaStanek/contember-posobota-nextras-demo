import { SchemaDefinition as def } from '@contember/schema-definition'

export class Book {
    title = def.stringColumn().notNull()
    author = def.manyHasOne(Author, "books").notNull()
}

export class Author {
    name = def.stringColumn().notNull()
    books = def.oneHasMany(Book, "author")
}


