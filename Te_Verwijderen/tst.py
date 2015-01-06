
from py2neo import neo4j

graph = neo4j.GraphDatabaseService("http://localhost:7474/db/data/")

name = "Asus Sabertooth X79"
existing_nodes = list(graph.find('Onderdeel', property_key='name', property_value=name))
print (existing_nodes)