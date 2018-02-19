import React from 'react';
import { Link } from 'react-router-dom'

class Artist_ById extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			error: null,
			isLoaded: false,
			items: [],
			id : this.props.match.params.id
		};
	}

	componentDidMount() {
		fetch(`http://localhost/api/artists/read_one.php?id=${this.state.id}`)
			.then(res => res.json())
			.then(
				(result) => {
					console.log(result);
					this.setState({
						isLoaded: true,
						items : result
					});
				},
				(error) => {
					this.setState({
						isLoaded: true,
						error
					});
				}
			)
	}

	render() {
		const { error, isLoaded, items } = this.state;
		if (error) {
			return <div>Error: {error.message}</div>;
		} else if (!isLoaded) {
			return <div>Loading...</div>;
		} else {
			console.log(items);
			return (
				<ul>
					{items.map(artist => (
						<li	 key={artist.id}>
							<p>{artist.name}</p>
							<p>{artist.description}</p>
							<p>{artist.bio}</p>
							<Link to={`/artist/${artist.id}`}><img src={artist.photo} /></Link>
						</li>
					))}
				</ul>
			);
		}
	}
}

export default Artist_ById;