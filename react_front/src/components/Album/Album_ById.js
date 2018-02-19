import React from "react";
import { Link } from 'react-router-dom'

class Album_ById extends React.Component {
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
		fetch(`http://localhost/api/albums/read_one.php?id=${this.state.id}`)
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
					{items.map(album => (
						<li	 key={album.id}>
							<Link to={`/album/${album.id}`}>{album.name}</Link>
							<p>Name : <br/> {album.name}</p>
							<ul>Genre : <br/> {album.genre.map (datum =>
								<li>{datum}</li>
							)}</ul>
							<br/>
							<a href={album.cover}><img src={album.cover_small} /></a><br/>
							<p>Description : <br/> {album.description}</p>
							<ul>Tracks : <br/> {album.tracks.map (sound =>
								<li>{sound}</li>
							)}</ul>
							<br/>
							<p>Release Date : <br/> {album.description}</p>
							<p>Popularity : <br/> {album.description} </p>
						</li>
					))}
				</ul>
			);
		}
	}
}

export default Album_ById;